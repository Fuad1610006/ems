<?php

namespace App\Http\Controllers;

use App\Http\Requests\Resignation\AddNewRequest;
use App\Http\Requests\Resignation\UpdateRequest;
use Illuminate\Support\Facades\Auth;
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
         $currentUserId = encryptor('decrypt', session('userId'));
        return view('resignation.create',compact('currentUserId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try{
            $resignation=new Resignation;
            $resignation->employee_id=$request->employee_id;
            // $resignation->department_id=$request->department_id;
            // $resignation->designation_id=$request->designation_id;
            $resignation->notice_date=$request->notice_date;
            $resignation->resignation_date=$request->resignation_date;
            // $resignation->type=$request->type;
            $resignation->reason=$request->reason;
            $resignation->application_file=$request->application_file;
           if( $resignation->save()){
             $this->notice::success('Successfully saved');
            return redirect()->route('resignation.index');
           
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
    public function update(UpdateRequest $request, $id)
    {
        try{
            $resignation=Resignation::findOrFail(encryptor('decrypt', $id));
            $resignation->employee_id=$request->employee_id;
            // $resignation->department_id=$request->department_id;
            // $resignation->designation_id=$request->designation_id;
            $resignation->notice_date=$request->notice_date;
            $resignation->resignation_date=$request->resignation_date;
            // $resignation->type=$request->type;
            $resignation->reason=$request->reason;
            $resignation->application_file=$request->application_file;
            if($resignation->save()){
                 $this->notice::success('Successfully updated');
                return redirect()->route('resignation.index');
               
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
        $resignation= Resignation::findOrFail(encryptor('decrypt', $id));
        if($resignation->delete()){
            $this->notice::warning('Deleted Permanently!');
            return redirect()->back();          
        }
    }
}
