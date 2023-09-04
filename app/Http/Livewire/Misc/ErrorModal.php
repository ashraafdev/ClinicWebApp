<?php

namespace App\Http\Livewire\Misc;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ErrorModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.misc.error-modal');
    }
}
