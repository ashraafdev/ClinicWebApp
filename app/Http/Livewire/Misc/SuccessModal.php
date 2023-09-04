<?php

namespace App\Http\Livewire\Misc;

use LivewireUI\Modal\ModalComponent;

class SuccessModal extends ModalComponent
{
    public string $message;

    public function render()
    {
        return view('livewire.misc.success-modal');
    }
}
