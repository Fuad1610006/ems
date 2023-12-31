<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Shift;
use App\Http\Requests\employee\AddNewRequest;
use App\Http\Requests\employee\UpdateRequest;
use Toastr;
use DB;
use Exception;
use File;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $employee= Employee::paginate(15);
       return view('employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role= Role::get();
        $shift= Shift::get();
        $department= Department::get();
        $designation= Designation::get();
        return view('employee.create', compact('role','department','designation','shift'));
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
            $employee->present_address = $request->present_address;
            $employee->permanent_address = $request->permanent_address;
            $employee->department_id = $request->department_id;
            $employee->designation_id = $request->designation_id;
            $employee->blood_group = $request->blood_group;
            $employee->gender = $request->gender;
            $employee->date_of_birth = $request->date_of_birth;
            $employee->joining_date = $request->joining_date;
            $employee->nid_no = $request->nid_no;
            $employee->role_id = $request->roleId;
            $employee->shift_id = $request->shift_id;
            $employee->password = Hash::make($request->password);
            // $employee->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/employees'), $imageName);
                $employee->image = $imageName;
            }

            if ($employee->save()) {
                $user=new User;
                $user->employee_id = $employee->id;
                $user->name_en = $request->name_en;
                $user->email = $request->EmailAddress;
                $user->contact_no_en = $request->contact_no_en;
                $user->role_id = $request->roleId;
                // $user->status = $request->status;
                $user->password = Hash::make($request->password);
                if($user->save()){
                    DB::commit();
                    return redirect()->route('employee.index');
                    $this->notice::success('Employee Successfully Added');
                }else{
                return redirect()->back()->withInput();
                $this->notice::error('Please try again!');
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
    public function show($id)
    {
        $role= Role::get();
        $shift= Shift::get();
        $department= Department::get();
        $designation= Designation::get();
        $employee = Employee::findOrFail(encryptor('decrypt', $id));
        return view('employee.show', compact('role','department','designation','shift','employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = optional(Employee::find(encryptor('decrypt', $id)))->first();
        $role = Role::get();
        $shift= Shift::get();
        $department= Department::get();
        $designation= Designation::get();
        return view('employee.edit', compact('role', 'employee','department','designation','shift'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $employee = Employee::findOrFail(encryptor('decryptor',$id));
            $employee->name_en = $request->name_en;
            $employee->name_bn = $request->name_bn;
            $employee->email = $request->EmailAddress;
            $employee->contact_no_en = $request->contact_no_en;
            $employee->contact_no_bn = $request->contact_no_bn;
            $employee->present_address = $request->present_address;
            $employee->permanent_address = $request->permanent_address;
            $employee->blood_group = $request->blood_group;
            $employee->gender = $request->gender;
            $employee->date_of_birth = $request->date_of_birth;
            $employee->joining_date = $request->joining_date;
            $employee->nid_no = $request->nid_no;
            $employee->role_id = $request->roleId;
            $employee->shift_id = $request->shift_id;
            // $employee->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/employees'), $imageName);
                $employee->image = $imageName;
            }

            if ($employee->save()) {
                $user=User::where('employee_id',$employee->id)->first();
                $user->employee_id = $employee->id;
                $user->name_en = $request->name_en;
                $user->email = $request->EmailAddress;
                $user->contact_no_en = $request->contactNumber_en;
                $user->role_id = $request->roleId;
                // $user->status = $request->status;
                $user->password = base64_encode($output);;
                if($user->save()){
                    DB::commit();
                     $this->notice::success('Successfully updated!');
                    return redirect()->route('employee.index');

                }else{
                    $this->notice::error('Please try again!');
                    return redirect()->back()->withInput();
                }
            }

        } catch (Exception $e) {
            DB::rollback();
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
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

    /**
     * To display employee profile.
     */
    public function showProfile()
    {
        // Retrieve the logged-in user's ID using your custom function
        $loggedInEmployeeId = request()->session()->get('employeeId');

        // Retrieve employee information based on the logged-in user's ID
        $employee = Employee::where('id', $loggedInEmployeeId)->first();

        // Check if the employee exists
        if (!$employee) {
        // dd($loggedInEmployeeId);
            abort(404, 'Employee not found');
        }

        // Pass the employee data to the view
        return view('employee.profile', compact('employee'));
    }


    /**
     * To update employee profile.
     */
    public function updateProfile(UpdateProfileRequest $request,$id)
    {
        try {
            DB::beginTransaction();
            $employee = Employee::findOrFail(encryptor('decryptor',$id));
            $employee->name_en = $request->name_en;
            $employee->name_bn = $request->name_bn;
            $employee->email = $request->EmailAddress;
            $employee->contact_no_en = $request->contact_no_en;
            $employee->contact_no_bn = $request->contact_no_bn;
            $employee->present_address = $request->present_address;
            $employee->permanent_address = $request->permanent_address;
            $employee->blood_group = $request->blood_group;
            $employee->gender = $request->gender;
            $employee->date_of_birth = $request->date_of_birth;
            $employee->joining_date = $request->joining_date;
            $employee->nid_no = $request->nid_no;

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/employees'), $imageName);
                $employee->image = $imageName;
            }

            $employee()->save();

            $user=User::where('employee_id',$employee->id)->first();
            $user->employee_id = $employee->id;
            $user->name_en = $request->name_en;
            $user->email = $request->EmailAddress;
            $user->contact_no_en = $request->contactNumber_en;

            $user->password = Hash::make($request->password);

            $user()->save();

            DB::commit();
             $this->notice::success('Profile Updated Successfully');
            return redirect()->route('employee.profile');


        } catch (Exception $e) {
            DB::rollback();
            dd($e);
             $this->notice::error('Please try again');
            return redirect()->back()->withInput();

        }

    }

}
