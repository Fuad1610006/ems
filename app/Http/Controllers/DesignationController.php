<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\designation\AddNewRequest;
use App\Http\Requests\designation\UpdateRequest;
use App\Models\Designation;
use App\Models\Department;
use Exception;

class DesignationController extends Controller
{
    public function index()
    {
        $designation = Designation::all();
        return view('designation.index', compact('designation'));
    }

    public function create()
    {
        $department=Department::all();
        $designation=Designation::all();
        return view('designation.create',compact('department','designation'));
    }

    public function store(AddNewRequest $request)
    {
        try{
        $designation=new Designation;
        $designation->designation=$request->designation;
        $designation->department_id = $request->department_id;
        if( $designation->save()){
        return redirect->route('designation.index');
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

    public function show(Designation $designation)
    {
        // return view('designations.show', compact('designation'));
    }

    public function edit($id)
    {
        $designation = Designation::findOrFail(encryptor('decrypt', $id));
        $department=Department::all();
        return view('designation.edit', compact('designation', 'department'));
    }

    public function update(UpdateRequest $request, $id)
    {
        try{
            $designation=Designation::findOrFail(encryptor('decrypt', $id));
            $designation->designation=$request->designation;
            $designation->department_id=$request->department_id;
        if($designation->save()){
            return redirect()->route('designation.index');
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
        $designation= Designation::findOrFail(encryptor('decrypt', $id));
        if($designation->delete()){
            return redirect()->back();
            $this->notice::warning('Deleted Permanently!');
        }
    }
}
