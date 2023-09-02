<?php

namespace App\Http\Livewire\Operations;

use App\Models\OperationConsultation;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OperationsList extends Component
{
    protected $operations;

    protected $listeners = ['searchData' => 'search'];

    public function mount()
    {
        $this->operations = OperationConsultation::paginate(6);
    }

    public function render()
    {
        return view('livewire.operations.operations-list', [
            'operations' => $this->operations,
        ]);
    }

    public function search(array $data)
    {
        $searchData = OperationConsultation::
            join('consultations', 'operation_consultations.consultationID', '=', 'consultations.id')
            ->join('patients', 'patients.id', '=', 'consultations.patientID')
            ->join('operation_partie_prenants', 'operation_partie_prenants.operationID', '=', 'operation_consultations.id')
            ->where(function ($query) use ($data) {
                if (isset($data['patient']))
                    $query->where('patients.id', $data['patient']);
            })
            ->where(function ($query) use ($data) {
                if (isset($data['medecin']))
                    $query->where('operation_partie_prenants.partiePrenantID', $data['medecin']);
            })
            ->where(function ($query) use ($data) {
                if (isset($data['startDate'], $data['endDate']))
                    $query->whereBetween('consultations.date', [$data['startDate'], $data['endDate']]);
                else if (isset($data['startDate']))
                    $query->where('consultations.date', $data['startDate']);
            })
            ->select('operation_consultations.*')
            ->paginate(6);

        $this->operations = $searchData;
    }
}
