<?php

namespace App\Http\Livewire\Role;

use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class NewRole extends ModalComponent
{

    public $name;

    protected $rules = [
        'name' => 'required|min:3|unique:roles,name',
    ];

    public function render()
    {
        return view('livewire.role.new-role');
    }

    public function store()
    {
        $this->validate();

        Role::create(['name' => $this->name]);
        return redirect('/roles');
    }
}
