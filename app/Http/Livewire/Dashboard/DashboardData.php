<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Consultation;
use App\Models\OperationConsultation;
use App\Models\PaiementOrder;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardData extends Component
{
    public $patients, $employees, $consultations, $operations;

    public $consultationsEarning, $consultationsPending, $operationsEarning, $operationsPending;

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

        $this->consultationsEarning = PaiementOrder::whereRaw('consultationID IS NOT NULL AND status = 1')->select(DB::raw('SUM(amount) AS total_amount'))->first()->total_amount;
        $this->consultationsPending = PaiementOrder::whereRaw('consultationID IS NOT NULL AND status = 1')->selectRaw('SUM(amount) AS total_amount')->first()->total_amount;

        $this->operationsEarning = PaiementOrder::whereRaw('operationID IS NOT NULL AND status = 1')->selectRaw('SUM(amount) AS total_amount')->first()->total_amount;
        $this->operationsPending = PaiementOrder::whereRaw('operationID IS NOT NULL AND status = 0')->selectRaw('SUM(amount) AS total_amount')->first()->total_amount;

        $rolesPercentage = User::
                            join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
                        ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
                    ->selectRaw('count(users.id) AS counting, roles.name')
                ->groupBy('model_has_roles.role_id')
            ->get()
        ->toArray();

        $patientsPercentage = Patient::
                        selectRaw('count(id) as counting, DATE(created_at) as date')
                    ->groupBy(DB::raw('DATE(created_at)'))
                ->limit(7)
            ->get()
        ->toArray();

        $consultationsPercentage = Consultation::
                        selectRaw('count(id) as counting, DATE(created_at) as date')
                    ->groupBy(DB::raw('DATE(created_at)'))
                ->limit(7)
            ->get()
        ->toArray();

        $operationsPercentage = OperationConsultation::
                        selectRaw('count(id) as counting, DATE(created_at) as date')
                    ->groupBy(DB::raw('DATE(created_at)'))
                ->limit(7)
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
