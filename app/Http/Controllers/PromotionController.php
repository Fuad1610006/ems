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
        return view('promotion.create');
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
            $promotion->notice_date=$request->notice_date;
            $promotion->promotion_date=$request->promotion_date;
            $promotion->new_designation=$request->new_designation;

           if( $promotion->save()){
            return redirect->route('promotion.index');
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
            $promotion=Promotion::findOrFail(encryptor('decrypt', $id));
            $promotion->employee_id=$request->employee_id;
            $promotion->department_id=$request->department_id;
            $promotion->designation_id=$request->designation_id;
            $promotion->notice_date=$request->notice_date;
            $promotion->promotion_date=$request->promotion_date;
            $promotion->new_designation=$request->new_designation;

            if($promotion->save()){
                return redirect()->route('promotion.index');
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
        $promotion= Promotion::findOrFail(encryptor('decrypt', $id));
        if($promotion->delete()){
            return redirect()->back();
            $this->notice::warning('Deleted Permanently!');
        }
    }
}
