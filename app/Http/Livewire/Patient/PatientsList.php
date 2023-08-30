<?php

namespace App\Http\Livewire\Patient;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class PatientsList extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.patient.patients-list', [
            'patients' => Patient::paginate(6),
        ]);
    }
}
