<?php

namespace App\Http\Livewire\DepSer;

use App\Models\DepSer;
use LivewireUI\Modal\ModalComponent;

class EditDepSer extends ModalComponent
{
    public DepSer $dep_ser;

    public function rules()
    {
        return [
            'dep_ser.name' => 'required|min:3|unique:dep_sers,name,' . $this->dep_ser->id
        ];
    }

    public function render()
    {
        return view('livewire.dep-ser.edit-dep-ser');
    }

    public function store()
    {
        $validatedData = $this->validate();

        $this->dep_ser->update($validatedData);
        return redirect('/depsers');
    }
}
