<?php

namespace App\Http\Livewire\DepSer;

use App\Models\DepSer;
use Exception;
use LivewireUI\Modal\ModalComponent;

class DeleteDepSer extends ModalComponent
{
    public DepSer $dep_ser;

    public function render()
    {
        return view('livewire.dep-ser.delete-dep-ser');
    }

    public function deleteIt()
    {
        try {
            $this->dep_ser->delete();
            return redirect('/depsers');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        }
    }
}
