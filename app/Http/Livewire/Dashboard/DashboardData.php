<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Consultation;
use App\Models\OperationConsultation;
use App\Models\Patient;
use App\Models\User;
use Livewire\Component;

class DashboardData extends Component
{
    public $patients, $employees, $consultations, $operations;

    public $rolesLabelsPercentage, $rolesPercentageNumbers;  
    public $patientsLabelsPercentage, $patientsPercentageNumbers;  
    public $consultationsLabelsPercentage, $consultationsPercentageNumbers;  
    public $operationsLabelsPercentage, $operationsPercentageNumbers;  

    public function mount()
    {
        $this->patients = Patient::count();
        $this->employees = User::count();
        $this->consultations = Consultation::count();
        $this->operations = OperationConsultation::count();

        $rolesPercentage = User::
                            join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
                        ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
                    ->selectRaw('count(users.id) AS counting, roles.name')
                ->groupBy('model_has_roles.role_id')
            ->get()
        ->toArray();

        $patientsPercentage = Patient::
                    selectRaw('count(id) as counting, DATE(created_at) as date')
                ->groupBy('created_at')
            ->get()
        ->toArray();

        $consultationsPercentage = Consultation::
                    selectRaw('count(id) as counting, DATE(created_at) as date')
                ->groupBy('created_at')
            ->get()
        ->toArray();

        $operationsPercentage = OperationConsultation::
                    selectRaw('count(id) as counting, DATE(created_at) as date')
                ->groupBy('created_at')
            ->get()
        ->toArray();
        
        foreach ($rolesPercentage as $role) {
            $role = json_decode(json_encode($role), true);

            $this->rolesLabelsPercentage[] = $role['name'];
            $this->rolesPercentageNumbers[] = $role['counting'];
        }   
        
        foreach ($patientsPercentage as $date) {
            $date = json_decode(json_encode($date), true);

            $this->patientsLabelsPercentage[] = $date['date'];
            $this->patientsPercentageNumbers[] = $date['counting'];
        }

        foreach ($consultationsPercentage as $date) {
            $date = json_decode(json_encode($date), true);

            $this->consultationsLabelsPercentage[] = $date['date'];
            $this->consultationsPercentageNumbers[] = $date['counting'];
        }

        foreach ($operationsPercentage as $date) {
            $date = json_decode(json_encode($date), true);

            $this->operationsLabelsPercentage[] = $date['date'];
            $this->operationsPercentageNumbers[] = $date['counting'];
        }
    }

    public function render()
    {
        return view('livewire.dashboard.dashboard-data');
    }
}
