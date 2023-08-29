<?php

namespace App\Http\Livewire\Employee;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class EditEmployee extends ModalComponent
{
    public User $user;
    public $password;

    protected function rules()
    {
        return [
            'user.name' => 'required|min:6',
            'user.cin' => 'required|unique:users,cin,' . $this->user->id,
            'user.email' => 'required|email|unique:users,email,' . $this->user->id,
            'user.address' => 'required',
            'user.gender' => 'required',
            'user.bornDate' => 'required|date',
            'user.recrutingDate' => 'required|date',
            'user.phone' => 'required|unique:users,phone,' . $this->user->id,
            'user.typeEmploi' => 'required',
            'password' => 'nullable|min:10',
        ];
    }

    public function render()
    {
        return view('livewire.employee.edit-employee', [
            'roles' => Role::all()->pluck('name'),
        ]);
    }

    public function store()
    {
        $validatedData = $this->validate();

        if (filled($this->password))
            $validatedData['user']['password'] = Hash::make($validatedData['password']);

        $this->user->update($validatedData['user']);
        $this->user->syncRoles([$validatedData['user']['typeEmploi']]);

        return redirect('/employees');
    }
}
