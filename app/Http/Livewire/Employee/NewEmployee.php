<?php

namespace App\Http\Livewire\Employee;

use App\Models\DepSer;
use App\Models\DepSerLinking;
use App\Models\MedecinData;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class NewEmployee extends ModalComponent
{

    public $deps_sers;
    public $name, $cin, $phone, $email, $password, $address, $gender = 'male', $bornDate, $recrutingDate, $typeEmploi = 'Administrator', $depser, $speciality, $cost;
    
    public $showInfirmierOption = false;
    public $showMedecinOption = false;

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

    public function mount()
    {
        $this->deps_sers = DepSer::all();
        $this->depser = $this->deps_sers[0]->id;
    }

    public function render()
    {
        return view('livewire.employee.new-employee', [
            'roles' => Role::all()->pluck('name'),
            'deps_sers' => $this->deps_sers,
        ]);
    }

    public function toggleAdditonalOption($selection)
    {
        $this->showMedecinOption = false;
        $this->showInfirmierOption = false;

        if (in_array($selection, ['Medecin', 'Infirmier'])) {
            $this->depser = $this->deps_sers[0]->id;
            
            if ($selection == 'Infirmier') 
                return $this->showInfirmierOption = true;
            return $this->showMedecinOption = true;
        }
    }

    public function store()
    {
        $validatedData = $this->validate();

        $validatedData['password'] = Hash::make($validatedData['password']);

        DB::beginTransaction();

        try {
            $user = User::create($validatedData);
    
            $user->assignRole($this->typeEmploi);
    
            if ($this->showInfirmierOption || $this->showMedecinOption) {

                $depSerArray = [];

                if ($this->showInfirmierOption) 
                    $depSerArray['infirmierID'] = $user->id;
                else if ($this->showMedecinOption) {
                    $depSerArray['medecinID'] = $user->id;

                    MedecinData::create([
                        'medecinID' => $user->id,
                        'speciality' => $this->speciality,
                        'cost' => $this->cost,
                    ]);
                }

                $depSerArray['dep_ser_ID'] = $this->depser;

                DepSerLinking::create($depSerArray);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }

        return redirect('/employees');
    }
}
