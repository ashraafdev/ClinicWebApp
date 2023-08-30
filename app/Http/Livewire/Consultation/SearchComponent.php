<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Patient;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class SearchComponent extends ModalComponent
{
    public $patient, $medecin, $date;

    

    protected $rules = [
        'patient' => 'required_without_all|numeric',
        'medecin' => 'required_without_all|numeric',
        'date' => 'required_without_all|date',
    ];

    public function render()
    {
        return view('livewire.consultation.search-component', [
            'patients' => Patient::all(),
            'medecins' => User::role('Medecin')->get(),
        ]);
    }

    public function search()
    {
        $validatedData = $this->validate();
        
        $this->emitTo('consultation.consultations-list', 'searchData', $validatedData);
    }
}
