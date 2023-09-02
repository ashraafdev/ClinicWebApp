<?php

namespace App\Http\Livewire\Patient;

use Livewire\Component;

class MainComponent extends Component
{
    public function render()
    {
        if (!(auth()->user()->hasRole('Assistant') || auth()->user()->hasRole('Medecin') || auth()->user()->hasRole('Infirmier'))) abort(401);
        return view('livewire.patient.main-component');
    }
}
