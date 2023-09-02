<?php

namespace App\Http\Livewire\Operations;

use App\Models\OperationConsultation;
use App\Models\Patient;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class SearchComponent extends ModalComponent
{
    public $patient, $medecin, $startDate, $endDate;

    protected $rules = [
        'patient' => 'required_without_all:medecin,startDate',
        'medecin' => 'required_without_all:patient,startDate',
        'startDate' => 'required_without_all:patient,medecin',
        'endDate' => 'required_without:startDate',
    ];

    public function render()
    {
        return view('livewire.operations.search-component', [
            'patients' => Patient::all(),
            'medecins' => User::role('Medecin')->get(),
        ]);
    }

    public function search()
    {
        $validatedData = $this->validate();

        $this->emitTo('operations.operations-list', 'searchData', $validatedData);
        $this->closeModal();
    }
}
