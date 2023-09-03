<?php

namespace App\Http\Livewire\Patient;

use App\Models\Patient;
use App\Models\User;
use Exception;
use LivewireUI\Modal\ModalComponent;

class EditPatient extends ModalComponent
{
    public Patient $patient;

    protected function rules()
    {
        return [
            'patient.nom' => 'required|min:3',
            'patient.prenom' => 'required|min:3',
            'patient.cin' => 'required|min:4|unique:patients,cin,' . $this->patient->id,
            'patient.tel' => 'required|min:10|unique:patients,tel,' . $this->patient->id,
            'patient.adresse' => 'required|min:8',
            'patient.email' => 'required|email|unique:patients,email,' . $this->patient->id,
            'patient.medecin' => 'required',
        ];
    }

    public function render()
    {
        return view('livewire.patient.edit-patient', [
            'medecins' => User::role('Medecin')->get(),
        ]);
    }

    public function store()
    {
        $validatedData = $this->validate();
        try {
            $this->patient->update($validatedData);
            return redirect('/patients');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        } 

    }
}
