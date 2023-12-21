<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Salary;

use App\Models\Attendance;
use App\Models\Overtime;

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
        return view('salary.create', compact('department'));
    }

    public function get_salary(Request $r){
        $startdate=$r->s_year.'-'.$r->s_month.'-01';
        $enddate=$r->s_year.'-'.$r->s_month.'-31';
        $employee = Employee::where('department_id',$r->department_id);
        $datas="";
        $totalamt=0;
        if($employee->count() > 0){
            $employee =$employee->get();
            $i=0;
            foreach($employee as $i=>$emp){
                $absetd=$total=$bonus=$tax=0;
                $absent=Attendance::whereBetween('date',[$startdate,$enddate])->where('employee_id',$emp->id)->where('status',0)->count();
                $ovettime=Overtime::whereBetween('date',[$startdate,$enddate])->where('employee_id',$emp->id)->sum('hours');
                if($absent > 2){
                    $absetd=(($absent - 2)*($emp->basic/30));
                }
                if($r->bonus){
                    $bonus=($emp->basic*(100/$emp->bonus));
                }
                    $hr=($emp->basic*0.10);
                    $mca=($emp->basic*0.10);
                    $tr=($emp->basic*0.05);
                    $dr=($emp->basic*0.05);
                    $pf=($emp->basic*0.05);
                    $ot=round($ovettime*((($emp->basic/30)/24)*2));
                $total=(($emp->basic+$hr+$mca+$tr+$dr+$ot) - ($absetd - $pf));
                if($total > 29167){
                    $tax=(($total - 29167) * 0.15);
                }
                $totalamt+=$total;
                $datas.="<tr>
                            <td>
                                ".++$i."
                                <input value='".$emp->id."' type='hidden' name='employee_id[]'>
                                <input value='".$emp->designation_id."' type='hidden' name='designation_id[]'>
                                <input value='".$emp->basic."' type='hidden' name='basic_salary[]'>
                                <input value='".$hr."' type='hidden' name='house_rent[]'>
                                <input value='".$mca."' type='hidden' name='medical_allowance[]'>
                                <input value='".$tr."' type='hidden' name='travel_allowance[]'>
                                <input value='".$dr."' type='hidden' name='dearness_allowance[]'>
                                <input value='".$ot."' type='hidden' name='overtime_amount[]'>
                                <input value='".$pf."' type='hidden' name='provident_fund[]'>
                                <input value='".$bonus."' type='hidden' name='bonus[]'>
                                <input value='".$tax."' type='hidden' name='tax[]'>
                                <input value='".$absetd."' type='hidden' name='leave_deduction[]'>
                                <input value='".$total."' type='hidden' name='salary[]'>
                            </td>
                            <td>".$emp->name_en."</td>
                            <td>".$emp->basic."</td>
                            <td>".$hr."</td>
                            <td>".$mca."</td>
                            <td>".$tr."</td>
                            <td>".$dr."</td>
                            <td>".$ot."</td>
                            <td>".$bonus."</td>
                            <td>".$tax."</td>
                            <td>".$pf."</td>
                            <td>".$absetd."</td>
                            <td>".$total."</td>
                        </tr>";
            }
            $datas.="<tr>
                        <td colspan='12'>
                            Total 
                            <input value='".$totalamt."' type='hidden' name='total_amount'>
                        </td>
                        <td>".$totalamt."</td>
                    </tr>";
        }else{
            $datas.="<tr>
                        <td colspan='13'>
                            No load found
                        </td>
                    </tr>";
        }
        echo json_encode($datas);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            if($request->employee_id){

                Salary::where('s_year',$request->s_year)
                        ->where('s_month',$request->s_month)
                        ->where('department_id',$request->department_id)->delete();

                foreach($request->employee_id as $i=>$emp){
                    $salary=new Salary;
                    $salary->employee_id=$emp;
                    $salary->s_year=$request->s_year;
                    $salary->s_month=$request->s_month;
                    $salary->department_id=$request->department_id;
                    $salary->designation_id=$request->designation_id[$i];
                    $salary->pay_date=$request->pay_date;
                    $salary->basic_salary=$request->basic_salary[$i];
                    $salary->house_rent=$request->house_rent[$i];
                    $salary->medical_allowance=$request->medical_allowance[$i];
                    $salary->travel_allowance=$request->travel_allowance[$i];
                    $salary->dearness_allowance=$request->dearness_allowance[$i];
                    $salary->overtime_amount=$request->overtime_amount[$i];
                    $salary->bonus=$request->bonus[$i];
                    $salary->tax=$request->tax[$i];
                    $salary->provident_fund=$request->provident_fund[$i];
                    $salary->leave_deduction=$request->leave_deduction[$i];
                    $salary->salary=$request->salary[$i];
                    $salary->save();
                }
            }
            
            $this->notice::success('Successfully saved');
            return redirect()->route('salary.index');
    }catch(Exception $e){
            dd($e);
             $this->notice::error('Please try again');
            return redirect()->back()->withInput();

        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $department= Department::get();
        $designation= Designation::get();
        $employee = Employee::findOrFail(encryptor('decrypt', $id));
        return view('salary.show', compact('department','designation','employee'));
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
