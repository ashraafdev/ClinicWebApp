<?php

namespace App\Http\Livewire\Operations;

use App\Models\MesureImages;
use App\Models\OperationConsultation;
use Livewire\WithPagination;
use LivewireUI\Modal\ModalComponent;

class MesuresList extends ModalComponent
{
    use WithPagination;

    public OperationConsultation $operation;

    public function render()
    {
        return view('livewire.operations.mesures-list', [
            'mesureImages' => MesureImages::where('operationsID', $this->operation->id)->paginate(6),
        ]);
    }
}
