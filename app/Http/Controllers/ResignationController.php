<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Resignation;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class ResignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resignation = Resignation::all();
        return view('resignation.index', compact('resignation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resignation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $resignation=new Resignation;
            $resignation->employee_id=$request->employee_id;
            $resignation->department_id=$request->department_id;
            $resignation->designation_id=$request->designation_id;
            $resignation->notice_date=$request->notice_date;
            $resignation->resignation_date=$request->resignation_date;
            $resignation->type=$request->type;
            $resignation->reason=$request->reason;
           if( $resignation->save()){
            return redirect->route('resignation.index');
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
    public function show(Resignation $resignation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $resignation=Resignation::findOrFail(encryptor('decrypt', $id));
        return view('resignation.edit', compact('resignation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $resignation=Resignation::findOrFail(encryptor('decrypt', $id));
            $resignation->employee_id=$request->employee_id;
            $resignation->department_id=$request->department_id;
            $resignation->designation_id=$request->designation_id;
            $resignation->notice_date=$request->notice_date;
            $resignation->resignation_date=$request->resignation_date;
            $resignation->type=$request->type;
            $resignation->reason=$request->reason;
            if($resignation->save()){
                return redirect()->route('resignation.index');
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
        $resignation= Resignation::findOrFail(encryptor('decrypt', $id));
        if($resignation->delete()){
            return redirect()->back();
            $this->notice::warning('Deleted Permanently!');
        }
    }
}
