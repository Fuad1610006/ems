<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Termination;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class TerminationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $termination = Termination::all();
        return view('termination.index', compact('termination'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('termination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $termination=new Termination;
            $termination->employee_id=$request->employee_id;
            $termination->department_id=$request->department_id;
            $termination->designation_id=$request->designation_id;
            $termination->notice_date=$request->notice_date;
            $termination->termination_date=$request->termination_date;
            $termination->type=$request->type;
            $termination->reason=$request->reason;
           if( $termination->save()){
            return redirect->route('termination.index');
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
    public function show(Termination $termination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $termination=Termination::findOrFail(encryptor('decrypt', $id));
        return view('termination.edit', compact('termination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $termination=Termination::findOrFail(encryptor('decrypt', $id));
            $termination->employee_id=$request->employee_id;
            $termination->department_id=$request->department_id;
            $termination->designation_id=$request->designation_id;
            $termination->notice_date=$request->notice_date;
            $termination->termination_date=$request->termination_date;
            $termination->type=$request->type;
            $termination->reason=$request->reason;
            if($termination->save()){
                return redirect()->route('termination.index');
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

        $termination= Termination::findOrFail(encryptor('decrypt', $id));
        if($termination->delete()){
            return redirect()->back();
            $this->notice::warning('Deleted Permanently!');
        }
    }
}
