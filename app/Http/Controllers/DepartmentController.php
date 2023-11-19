<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {   
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $department=new Department;
        $department->department=$request->department;
        $department->save();
        return redirect('departments');
    }

    public function show(Department $department)
    {
        // return view('departments.show', compact('department'));
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $department->department=$request->department;
        $department->save();
        return redirect('departments');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect('departments');                        
    }
}
