<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\Department;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::all();
        return view('designations.index', compact('designations'));
    }

    public function create()
    {
        $department=Department::all();
        $designation=Designation::all();
        return view('designations.create',compact('department','designation'));
    }

    public function store(Request $request)
    {
        $designation=new Designation;
        $designation->designation=$request->designation;
        $designation->save();
        return redirect('designations');
    }

    public function show(Designation $designation)
    {
        // return view('designations.show', compact('designation'));
    }

    public function edit(Designation $designation)
    {
        $departments = Department::all();
        return view('designations.edit', compact('designation', 'departments'));
    }

    public function update(Request $request, Designation $designation)
    {
        $designation->designation=$request->designation;
        $designation->department_id=$request->department_id;
        $designation->save();
        return redirect('designations');
    }

    public function destroy(Designation $designation)
    {
        $designation->delete();
        return redirect('designations');
    }
}
