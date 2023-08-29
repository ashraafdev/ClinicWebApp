<?php

namespace App\Http\Livewire\Employee;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeList extends Component
{

    use WithPagination;

    public function render()
    {
        $users = User::where('id', '<>', Auth::user()->id)->paginate(6);
        return view('livewire.employee.employee-list', ['users' => $users]);
    }
}
