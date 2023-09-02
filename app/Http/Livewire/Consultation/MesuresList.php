<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Consultation;
use App\Models\MesureImages;
use Livewire\WithPagination;
use LivewireUI\Modal\ModalComponent;

class MesuresList extends ModalComponent
{
    use WithPagination;

    public Consultation $consultation;

    public function render()
    {
        return view('livewire.consultation.mesures-list', [
            'mesureImages' => MesureImages::where('consultationsID', $this->consultation->id)->paginate(6)
        ]);
    }
}
