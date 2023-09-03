<?php

namespace App\Http\Livewire\Employee;

use App\Models\DepSer;
use App\Models\DepSerLinking;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class EditEmployee extends ModalComponent
{
    public User $user;
    public $password;
    public $showInfirmierOption = false;
    public $depSerSelected;

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

    public function toggleInfirmierOption($selection)
    {
        if ($selection == 'Infirmier') 
            return $this->showInfirmierOption = true;
        return $this->showInfirmierOption = false;
    }

    public function mount()
    {
        if ($this->user->depserLinking != null) {
            $this->showInfirmierOption = true;
            $this->depSerSelected = $this->user->depserLinking->dep_ser_ID;
        } 
    }

    public function render()
    {
        return view('livewire.employee.edit-employee', [
            'roles' => Role::all()->pluck('name'),
            'deps_sers' => DepSer::all(),
        ]);
    }

    public function store()
    {
        $validatedData = $this->validate();

        try {
            if (filled($this->password))
                $validatedData['user']['password'] = Hash::make($validatedData['password']);
    
            $this->user->update($validatedData['user']);
            $this->user->syncRoles([$validatedData['user']['typeEmploi']]);
    
            DepSerLinking::where('infirmierID', $this->user->id)->delete();
    
            if ($this->showInfirmierOption == true) {
                if ($this->user->getRoleNames()[0] == 'Infirmier') {
                    DepSerLinking::create([
                        'infirmierID' => $this->user->id,
                        'dep_ser_ID' => $this->depSerSelected,
                    ]);
                }
            }
    
            return redirect('/employees');
        } catch (Exception $e) {
            $this->emit('openModal', 'misc.error-modal');
        }

    }
}
