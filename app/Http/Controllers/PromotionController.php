<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Promotion;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotion = Promotion::all();
        return view('promotion.index', compact('promotion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employee = Employee::all();
        $designation = Designation::all();
        $department= Department::all();
        return view('promotion.create', compact('employee', 'designation', 'department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $promotion=new Promotion;
            $promotion->employee_id=$request->employee_id;
            $promotion->department_id=$request->department_id;
            $promotion->designation_id=$request->designation_id;
            $promotion->to_department = $request->to_department;
            $promotion->to_designation = $request->to_designation;
            $promotion->notice_date=$request->notice_date;
            $promotion->promotion_date=$request->promotion_date;
           
           if( $promotion->save()){
             $this->notice::success('Successfully saved');
            return redirect()->route('promotion.index');

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
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $promotion=Promotion::findOrFail(encryptor('decrypt', $id));
        return view('promotion.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $promotion = new Promotion;
            $promotion->employee_id = $request->employee_id;
            $promotion->department_id=$request->department_id;
            $promotion->designation_id=$request->designation_id;
            $promotion->to_department = $request->to_department;
            $promotion->to_designation = $request->to_designation;
            $promotion->notice_date = $request->notice_date;
            $promotion->promotion_date = $request->promotion_date;
            if($promotion->save()){
                 $this->notice::success('Successfully updated');
                return redirect()->route('promotion.index');

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
        $promotion= Promotion::findOrFail(encryptor('decrypt', $id));
        if($promotion->delete()){
             $this->notice::warning('Deleted Permanently!');
            return redirect()->back();

        }
    }
}
