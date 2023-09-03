<?php

namespace App\Http\Livewire\Employee;

use App\Models\User;
use Exception;
use LivewireUI\Modal\ModalComponent;

class DeleteEmployee extends ModalComponent
{
    public User $user;

    public function deleteIt()
    {
        try {
            $this->user->delete();
            return redirect('/employees');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        }
    }

    public function render()
    {
        return view('livewire.employee.delete-employee');
    }
}
