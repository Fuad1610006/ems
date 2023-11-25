<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Http\Requests\employee\AddNewRequest;
use App\Http\Requests\employee\UpdateRequest;
use Illuminate\Http\Request;
use Exception;
use File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
       $employee= Employee::paginate(15);
       return view('employees.index', compact('employee'));
    }
}
