<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use Exception;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();
        return view('departments.index', compact('department'));
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        try{
            $department=new Department;
            $department->department=$request->department;
           if( $department->save()){
            $this->notice::success('Successfully saved');
            return redirect('departments.index');
           }
        }catch(Exception $e){
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }

    }

    public function show(Department $department)
    {
        // return view('departments.show', compact('department'));
    }

    public function edit(Department $department)
    {
        $department=Department::findorFail($id);
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        try{
            $department=Department::findOrFail($id);
            $department->department=$request->department;

            if($department->save()){
                $this->notice::success('Successfully updated');
                return redirect()->route('departments.index');
            }
        }catch(Exception $e){
            $this->notice::error('Please try again');
            //dd($e);
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id)
    {
        $department= Department::findOrFail($id);
        if($department->delete()){
            $this->notice::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
