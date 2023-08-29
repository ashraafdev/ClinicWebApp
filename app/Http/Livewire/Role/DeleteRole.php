<?php

namespace App\Http\Livewire\Role;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class DeleteRole extends ModalComponent
{

    public Role $role;

    public function render()
    {
        return view('livewire.role.delete-role');
    }

    public function deleteIt()
    {
        $countOccurence = User::role($this->role->name)->count();

        if ($countOccurence == 0)
            $this->role->delete();

        return redirect('/roles');
    }
}
