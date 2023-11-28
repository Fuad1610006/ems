<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Designation;
use Exception;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();
        return view('department.index', compact('department'));
    }

    public function create()
    {
        return view('department.create');
    }

    public function store(Request $request)
    {
        try{
            $department=new Department;
            $department->department=$request->department;
           if( $department->save()){
            return redirect->route('department.index');
            $this->notice::success('Successfully saved');
           }else{
            return redirect()->back()->withInput();
            $this->notice::error('Please try again!');
        }
    }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput();
            $this->notice::error('Please try again');
        }

    }

    public function show(Department $department)
    {
        // return view('departments.show', compact('department'));
    }

    public function edit($id)
    {
        $department=Department::findorFail(encryptor('decrypt', $id));
        return view('department.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        try{
            $department=Department::findOrFail(encryptor('decrypt', $id));

            $department->department=$request->department;

            if($department->save()){
                return redirect()->route('department.index');
                $this->notice::success('Successfully updated');
             }else{
                return redirect()->back()->withInput();
                $this->notice::error('Please try again!');
            }
        }catch(Exception $e){
            //dd($e);
            return redirect()->back()->withInput();
            $this->notice::error('Please try again');
        }
    }

    public function destroy($id)
    {
        $department= Department::findOrFail(encryptor('decrypt', $id));
        if($department->delete()){
            return redirect()->back();
            $this->notice::warning('Deleted Permanently!');
        }
    }
}
