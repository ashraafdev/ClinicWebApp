<?php

namespace App\Http\Livewire\Employee;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MainComponent extends Component
{
    public function render()
    {
        if (!auth()->user()->hasRole('Administrator')) abort(401);
        return view('livewire.employee.main-component');
    }
}
