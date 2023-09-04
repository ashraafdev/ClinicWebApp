<?php

namespace App\Http\Livewire\Consultation;

use App\Models\PaiementOrder;
use App\Models\Patient;
use Exception;
use LivewireUI\Modal\ModalComponent;

class ProceedPaiement extends ModalComponent
{
    public Patient $patient;
    public int $consultationId; 
    public $name, $amount, $description;

    protected $rules = [
        'amount' => 'required|numeric',
        'description' => 'required|min:3',
    ];

    public function mount()
    {
        $this->name = $this->patient->prenom . ' ' . $this->patient->nom;
    }

    public function render()
    {
        return view('livewire.consultation.proceed-paiement');
    }

    public function store()
    {
        $validatedData = $this->validate();

        try {
            $validatedData['consultationID'] = $this->consultationId;
            $validatedData['patientID'] = $this->patient->id;

            PaiementOrder::create($validatedData);
            
            return redirect('/consultations');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        }
    }
}
