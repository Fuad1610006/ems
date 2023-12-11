<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Overtime;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class OvertimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee=Employee::all();
        $overtime = Overtime::all();
        return view('overtime.index', compact('overtime','employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employee=Employee::all();
        $department= Department::get();
        $designation=Designation::get();
        return view('overtime.create',compact('employee','department','designation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $overtime=new Overtime;
            $overtime->employee_id=$request->employee_id;
            $overtime->date=$request->date;
            $overtime->hours = $request->hours;
            $overtime->status = $request->status;
            if( $overtime->save()){
            return redirect()->route('overtime.index');
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

    /**
     * Display the specified resource.
     */
    public function show(Overtime $overtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $overtime = Overtime::findOrFail(encryptor('decrypt', $id));
        $employee=Employee::all();
        return view('overtime.edit', compact('overtime', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $overtime=Overtime::findOrFail(encryptor('decrypt', $id));
            $overtime->employee_id=$request->employee_id;
            $overtime->date=$request->date;
            $overtime->hours = $request->hours;
            $overtime->status = $request->status;
        if($overtime->save()){
            return redirect()->route('overtime.index');
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $overtime= Overtime::findOrFail(encryptor('decrypt', $id));
        if($overtime->delete()){
            return redirect()->back();
            $this->notice::warning('Deleted Permanently!');
        }
    }
}
