<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Salary;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salary = Salary::all();
        return view('salary.index', compact('salary'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department=Department::all();
        $designation=Designation::all();
        $employee= Employee::all();
        $salary= array();
        return view('salary.create', compact('salary'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         try{
            $salary=new Salary;
            $salary->employee_id=$request->employee_id;
            $salary->department_id=$request->department_id;
            $salary->designation_id=$request->designation_id;
            $salary->pay_date=$request->pay_date;
            $salary->basic_salary=$request->basic_salary;
            $salary->house_rent=$request->house_rent;
            $salary->medical_allowance=$request->medical_allowance;
            $salary->travel_allowance=$request->travel_allowance;
            $salary->dearness_allowance=$request->dearness_allowance;
            $salary->overtime_amount=$request->overtime_amount;
            $salary->bonus=$request->bonus;
            $salary->tax=$request->tax;
            $salary->provident_fund=$request->provident_fund;
            $salary->leave_deduction=$request->leave_deduction;

           if( $salary->save()){
             $this->notice::success('Successfully saved');
            return redirect()->route('salary.index');

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

    /**
     * Display the specified resource.
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $salary=Salary::findOrFail(encryptor('decrypt', $id));
        $department=Department::all();
        $designation=Designation::all();
        $employee= Employee::all();
        return view('salary.edit', compact('salary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $salary=Salary::findOrFail(encryptor('decrypt', $id));
            $salary->employee_id=$request->employee_id;
            $salary->department_id=$request->department_id;
            $salary->designation_id=$request->designation_id;
            $salary->pay_date=$request->pay_date;
            $salary->basic_salary=$request->basic_salary;
            $salary->house_rent=$request->house_rent;
            $salary->medical_allowance=$request->medical_allowance;
            $salary->travel_allowance=$request->travel_allowance;
            $salary->dearness_allowance=$request->dearness_allowance;
            $salary->overtime_amount=$request->overtime_amount;
            $salary->bonus=$request->bonus;
            $salary->tax=$request->tax;
            $salary->provident_fund=$request->provident_fund;
            $salary->leave_deduction=$request->leave_deduction;
            if($salary->save()){
                 $this->notice::success('Successfully updated');
                return redirect()->route('salary.index');
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $salary= Salary::findOrFail(encryptor('decrypt', $id));
        if($salary->delete()){
            return redirect()->back();
            $this->notice::warning('Deleted Permanently!');
        }
    }
}
