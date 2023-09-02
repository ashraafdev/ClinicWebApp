<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;

class MainComponent extends Component
{
    public function render()
    {
        if (!auth()->user()->hasRole('Administrator')) abort(401);
        return view('livewire.role.main-component');
    }
}
