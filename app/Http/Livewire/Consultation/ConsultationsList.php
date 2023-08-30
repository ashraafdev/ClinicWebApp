<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Consultation;
use Illuminate\Pagination\LengthAwarePaginator;
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
        dd($data);
        return $data;
    }

    public function render()
    {
        return view('livewire.consultation.consultations-list', [
            'consultations' => $this->consultations
        ]);
    }
}
