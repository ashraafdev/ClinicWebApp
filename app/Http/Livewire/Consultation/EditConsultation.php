<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Consultation;
use Exception;
use LivewireUI\Modal\ModalComponent;

class EditConsultation extends ModalComponent
{
    public Consultation $consultation;

    protected function rules()
    {
        return [
            'consultation.objet' => 'required|min:3',
            'consultation.observation' => 'required|min:3',
            'consultation.date' => 'required|date',
        ];
    }

    public function render()
    {
        return view('livewire.consultation.edit-consultation');
    }

    public function store()
    {
        $validatedData = $this->validate();
        
        try {
            $this->consultation->update($validatedData);
            return redirect('/consultations');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        } 

    }
}
