<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Livewire\WithPagination;

class RolesList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.role.roles-list', [
            'roles' => Role::paginate(6),
        ]);
    }
}
