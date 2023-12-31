<?php

namespace App\Http\Livewire\Patient;

use App\Models\Patient;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;

class NewPatient extends ModalComponent
{
    public $nom, $prenom, $cin, $tel, $adresse, $email, $medecin ;

    protected $rules = [
        'nom' => 'required|min:3',
        'prenom' => 'required|min:3',
        'cin' => 'required|min:4|unique:patients,cin',
        'tel' => 'required|min:10|unique:patients,tel',
        'adresse' => 'required|min:8',
        'email' => 'required|email|unique:patients,email',
        'medecin' => 'required',
    ];

    public function render()
    {
        return view('livewire.patient.new-patient', [
            'medecins' => User::role('Medecin')->get(),
        ]);
    }

    public function store()
    {
        $validatedData = $this->validate();
        
        DB::beginTransaction();

        try {
            $patient = Patient::create($validatedData);

            $patient->createAsStripeCustomer([
                'name' => $patient->prenom . ' ' . $patient->nom,
            ]);

            DB::commit();
            return redirect('/patients');
        } catch (Exception $e) {
            DB::rollBack();
            $this->emit('openModal', 'misc.error-modal');
        }
    }
}
