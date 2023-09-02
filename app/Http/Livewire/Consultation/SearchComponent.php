<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Patient;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class SearchComponent extends ModalComponent
{
    public $patient, $medecin, $startDate, $endDate;

    protected $rules = [
        'patient' => 'required_without_all:medecin,startDate,endDate',
        'medecin' => 'required_without_all:patient,startDate,endDate',
        'startDate' => 'required_without_all:patient,medecin,endDate',
        'endDate' => 'required_without:startDate'
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
        $this->closeModal();
    }
}
