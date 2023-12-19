<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Shift;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shift = Shift::all();
        return view('shift.index', compact('shift'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shift.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $shift=new Shift;
            $shift->shift=$request->shift;
            $shift->start_time=$request->start_time;
            $shift->end_time=$request->end_time;
           if( $shift->save()){
              $this->notice::success('Successfully saved');
            return redirect()->route('shift.index');
          
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
    public function show(Shift $shift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $shift=Shift::findOrFail(encryptor('decrypt', $id));
        return view('shift.edit', compact('shift'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
            $shift=Shift::findOrFail(encryptor('decrypt', $id));
            $shift->shift=$request->shift;
            $shift->start_time=$request->start_time;
            $shift->end_time=$request->end_time;
            if($shift->save()){
                  $this->notice::success('Successfully updated');
                return redirect()->route('shift.index');
              
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
        $shift= Shift::findOrFail(encryptor('decrypt', $id));
        if($shift->delete()){
             $this->notice::warning('Deleted Permanently!');
            return redirect()->back();
           
        }
    }
}
