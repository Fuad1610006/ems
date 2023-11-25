<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Http\Requests\employee\AddNewRequest;
use App\Http\Requests\employee\UpdateRequest;
use Illuminate\Http\Request;
use Exception;
use File;
use Illuminate\Support\Facades\Hash;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $employee= Employee::paginate(15);
       return view('employees.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role= Role::get();
        $department= Department::get();
        $designation= Designation::get();
        return view('employees.create', compact('role','department','designation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try {
            DB::beginTransaction();

            $employee = new Employee();
            $employee->name_en = $request->name_en;
            $employee->name_bn = $request->name_bn;
            $employee->email = $request->EmailAddress;
            $employee->contact_no_en = $request->contact_no_en;
            $employee->contact_no_bn = $request->contact_no_bn;
            $employee->present_address = $request->presentAddress;
            $employee->permanent_address = $request->permanentAddress;
           
            $employee->gender = $request->gender;
            $employee->date_of_birth = $request->date_of_birth;
            
            $employee->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/employees'), $imageName);
                $employee->image = $imageName;
            }

            if ($employee->save()) {
                $data=new User;
                
                $data->name_en = $request->full_name_en;
                $data->email = $request->EmailAddress;
                $data->contact_no_en = $request->contactNumber_en;
               
                
                $data->password = Hash::make($request->password);
                if($data->save()){
                    DB::commit();
                    return redirect()->route('employees.index');
                    $this->notice::success('Employee Successfully Added');
                }
            }

        } catch (Exception $e) {
            DB::rollback();
            dd($e);
            return redirect()->back();
            $this->notice::error('Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $employee = Employee::findOrFail(encryptor('decrypt', $id));
        $role = Role::get();
        return view('employees.edit', compact('role', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Employee $employee)
    {
        try {
            DB::beginTransaction();
            $employee = EmployBasic::findOrFail(\encryptor('decrypt', $id));
            $employee->name_en = $request->employeeName_en;
            $employee->name_bn = $request->employeeName_bn;
            $employee->email = $request->EmailAddress;
            $employee->contact_no_en = $request->contactNumber_en;
            $employee->contact_no_bn = $request->contactNumber_bn;
            $employee->present_address = $request->presentAddress;
            $employee->permanent_address = $request->permanentAddress;
            $employee->role_id = $request->roleId;
            $employee->gender = $request->gender;
            $employee->birth_date = $request->birthDate;
            
            $employee->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/employees'), $imageName);
                $employee->image = $imageName;
            }

            if ($employee->save()) {
                $data=User::where('employee_id',$employee->id)->first();
                $data->name_en = $request->employeeName_en;
                $data->email = $request->EmailAddress;
                $data->contact_no_en = $request->contactNumber_en;
                $data->role_id = $request->roleId;
                $data->status = $request->status;
                if($request->password)
                    $data->password = Hash::make($request->password);
                if($data->save()){
                    DB::commit();
                    return redirect()->route('employees.index');
                    $this->notice::success('Employee Successfully Updated');
                }
            }
        } catch (Exception $e) {
            DB::rollback();
            dd($e);
            return redirect()->back();
            $this->notice::error('Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee= Employee::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/employees/').$employee->image;
        
        if($employee->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);

            $this->notice::error('Employee Deleted Permanently!');
            return redirect()->back();
        }
    }
}
