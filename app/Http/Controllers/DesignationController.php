<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\designation\AddNewRequest;
use App\Http\Requests\designation\UpdateRequest;
use App\Models\Designation;
use App\Models\Department;
use Exception;
use Toastr;

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
             $this->notice::success('Successfully saved');
             return redirect()->route('designation.index');
       
        }else{
            $this->notice::error('Please try again!');
            return redirect()->back()->withInput();
           
        }
        }catch(Exception $e){
            dd($e);
             $this->notice::error('Please try again');
            return redirect()->back()->withInput();
           
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
             $this->notice::success('Successfully updated');
            return redirect()->route('designation.index');
           
        }else{
             $this->notice::error('Please try again!');
            return redirect()->back()->withInput();
           
        }
        }catch(Exception $e){
            //dd($e);
             $this->notice::error('Please try again');
            return redirect()->back()->withInput();
           
        }
     }

    public function destroy($id)
    {
        $designation= Designation::findOrFail(encryptor('decrypt', $id));
        if($designation->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back();
          
        }
    }
}
