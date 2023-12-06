<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Leave;
use Illuminate\Http\Request;
use Exception;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leave = Leave::get();
        return view('leave.index', compact('leave'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('leave.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         try{
            $leave=new Leave;
            $leave->employee_id=$request->employee_id;
            $leave->application_file=$request->application_file;
            $leave->start_date=$request->start_date;
            $leave->end_date=$request->end_date;
            $leave->leave_type=$request->leave_type;
            $leave->no_of_days=$request->no_of_days;
            $leave->allotted_leaves=$request->allotted_leaves;
            $leave->reason=$request->reason;
            $leave->status=$request->status;

           if( $leave->save()){
            return redirect->route('leave.index');
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
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leave $leave)
    {
        $leave=Leave::findOrFail(encryptor('decrypt', $id));
        return view('leave.edit', compact('leave'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leave $leave)
    {
        try{
            $leave=Leave::findOrFail(encryptor('decrypt', $id));
            $leave->employee_id=$request->employee_id;
            $leave->application_file=$request->application_file;
            $leave->start_date=$request->start_date;
            $leave->end_date=$request->end_date;
            $leave->leave_type=$request->leave_type;
            $leave->no_of_days=$request->no_of_days;
            $leave->allotted_leaves=$request->allotted_leaves;
            $leave->reason=$request->reason;
            $leave->status=$request->status;

           if( $leave->save()){
            return redirect->route('leave.index');
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
     * Remove the specified resource from storage.
     */
    public function destroy(Leave $leave)
    {
        $leave= Leave::findOrFail(encryptor('decrypt', $id));
        if($leave->delete()){
            return redirect()->back();
            $this->notice::warning('Deleted Permanently!');
        }
    }
}
