<?php

namespace App\Http\Livewire\Employee;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class NewEmployee extends ModalComponent
{

    public $name, $cin, $phone, $email, $password, $address, $gender = 'male', $bornDate, $recrutingDate, $typeEmploi = 'Administrator';

    protected $rules = [
        'name' => 'required|min:6',
        'cin' => 'required|unique:users,cin',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:10',
        'address' => 'required',
        'gender' => 'required',
        'bornDate' => 'required|date',
        'recrutingDate' => 'required|date',
        'phone' => 'required|unique:users,phone',
        'typeEmploi' => 'required',
    ];

    public function render()
    {
        return view('livewire.employee.new-employee', [
            'roles' => Role::all()->pluck('name'),
        ]);
    }

    public function store()
    {
        $validatedData = $this->validate();

        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);

        $user->assignRole($this->typeEmploi);

        return redirect('/employees');
    }
}
