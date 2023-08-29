<?php

namespace App\Http\Livewire\Employee;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class DeleteEmployee extends ModalComponent
{

    public User $user;

    public function deleteIt()
    {
        $this->user->delete();
        return redirect('/employees');
    }

    public function render()
    {
        return view('livewire.employee.delete-employee');
    }
}
