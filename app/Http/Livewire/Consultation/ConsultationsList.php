<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Consultation;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ConsultationsList extends Component
{
    use WithPagination;

    protected $listeners = ['searchData' => 'search'];

    protected $consultations;

    public function mount()
    {
        $this->consultations = Consultation::paginate(6);
    }

    public function search(array $data)
    {
   
        $searchResult = Consultation::join('patients', 'patients.id', '=', 'consultations.patientID')
            ->where(function ($query) use ($data) {
                if (isset($data['patient'])) 
                    $query->where('consultations.patientID', $data['patient']);
            })->where(function ($query) use ($data) {
                if (isset($data['medecin']))
                    $query->where('patients.medecin', $data['medecin']);
            })->where(function ($query) use ($data) {
                
                if (isset($data['startDate'], $data['endDate']))
                    $query->whereBetween('consultations.date', [$data['startDate'], $data['endDate']]);
                else if (isset($data['startDate']))
                    $query->where('consultations.date', [$data['startDate']]);

            })->paginate(6);
        
        $this->consultations = $searchResult;
     
    }

    public function render()
    {
        return view('livewire.consultation.consultations-list', [
            'consultations' => $this->consultations
        ]);
    }
}
