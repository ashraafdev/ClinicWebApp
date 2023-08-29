<?php

namespace App\Http\Livewire\Role;

use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class EditRole extends ModalComponent
{
    public Role $role;

    protected function rules()
    {
        return [
            'role.name' => 'required|min:3|unique:roles,name,' . $this->role->id,
        ];
    }

    public function render()
    {
        return view('livewire.role.edit-role');
    }

    public function store()
    {
        $validatedData = $this->validate();

        $this->role->update($validatedData);
        return redirect('/roles');
    }
}
