<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\Department;
use Exception;

class DesignationController extends Controller
{
    public function index()
    {
        $designation = Designation::all();
        return view('designations.index', compact('designation'));
    }

    public function create()
    {
        $department=Department::all();
        $designation=Designation::all();
        return view('designations.create',compact('department','designation'));
    }

    public function store(Request $request)
    {
        try{
        $designation=new Designation;
        $designation->designation=$request->designation;
        $designation->department_id = $request->department_id;
        if( $designation->save()){
        $this->notice::success('Successfully saved');
        return redirect('designations.index');
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

    public function edit(Designation $designation)
    {
        $designation = Designation::findorFail($id);
        return view('designations.edit', compact('designation', 'department'));
    }

    public function update(Request $request, Designation $designation)
    {
        try{
            $designation=Designation::findOrFail($id);
            $designation->designation=$request->designation;
            $designation->department_id=$request->department_id;
        if($designation->save()){
            $this->notice::success('Successfully updated');
            return redirect()->route('designations.index');
        }
        }catch(Exception $e){
            $this->notice::error('Please try again');
            //dd($e);
            return redirect()->back()->withInput();
        }
     }

    public function destroy(Designation $designation)
    {
        $designation= Designation::findOrFail($id);
        if($designation->delete()){
            $this->notice::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
