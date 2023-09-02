<?php

namespace App\Http\Livewire\DepSer;

use App\Models\DepSer;
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
        $this->dep_ser->delete();

        return redirect('/depsers');
    }
}
