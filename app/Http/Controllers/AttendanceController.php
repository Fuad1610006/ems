<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Exception;
use Toastr;
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendance = DB::select("SELECT attendances.date,sum(if(`status`=1,1,0)) as present,sum(if(`status`=0,1,0)) as absent FROM `attendances` order by attendances.date DESC");
        return view('attendance.index', compact('attendance'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employee = array();
        $employee = Employee::all();
        return view('attendance.create', compact('employee'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Attendance::where('date',$request->attendance[$request->employee_id]['date'])->delete();
            foreach ($request->attendance as $attendanceData)
                 {
                    $attendance = new Attendance;
                    $attendance->employee_id = $attendanceData['employee_id'];
                    $attendance->date = $attendanceData['date'];
                    $attendance->status = $attendanceData['status'];
                    $attendance->save();
            }
            $this->notice::success('Data successfully saved');
            return redirect()->route('attendance.index');
        } catch (Exception $e) {
            dd($e);
             $this->notice::error('Please try again!');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($date)
    {
        $attendance = Attendance::where('date',$date)->get();
        return view('attendance.show',compact('attendance','date'));
    }

    public function singleEdit($id)
    {
        $attendance= Attendance::findOrFail(encryptor('decrypt',$id));
        return view('attendance.single',compact('attendance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        $attendance = Attendance:: findOrFail(encryptor('decrypt',$request->$id));
        $attendance->status= $request->status;
        if($attendance->save())
        return redirect()->route('attendance.show',[$attendance->date]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
