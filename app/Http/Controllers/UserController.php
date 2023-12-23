<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Employee;
use App\Http\Requests\User\AddNewRequest;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Support\Facades\Hash;
use Exception;
use Toastr;
use File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee=Employee::get();
        $user=User::paginate(10);
        return view('user.index',compact('user','employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role=Role::get();
        $employee=Employee::get();
        return view('user.create',compact('role','employee'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try{
            $user=new User();
            $user->name_en=$request->userName_en;
            $user->name_bn=$request->userName_bn;
            $user->email=$request->EmailAddress;
            $user->contact_no_en=$request->contactNumber_en;
            $user->contact_no_bn=$request->contactNumber_bn;
            $user->role_id=$request->roleId;
            $user->status=$request->status;
            $user->full_access=$request->fullAccess;
            $user->language='en';
            $user->password=Hash::make($request->password);

            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/employees'), $imageName);
                $user->image=$imageName;
            }

            if($user->save()){
                 $this->notice::success('Successfully saved');
                return redirect()->route('user.index');
            }else{
                 $this->notice::error('Please try again!');
                //  Toastr::error('Please try again!');
                return redirect()->back()->withInput();

            }
        }catch(Exception $e){
            //dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role=Role::get();
        $user=User::findOrFail(encryptor('decrypt',$id));
        $employee=Employee::get();
        return view('user.edit',compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try{
            $user=User::findOrFail(encryptor('decrypt',$id));
            $user->name_en=$request->userName_en;
            $user->name_bn=$request->userName_bn;
            $user->email=$request->EmailAddress;
            $user->contact_no_en=$request->contactNumber_en;
            $user->contact_no_bn=$request->contactNumber_bn;
            $user->role_id=$request->roleId;
            $user->status=$request->status;
            $user->full_access=$request->fullAccess;

            if($request->password)
                $user->password=Hash::make($request->password);

            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/employees'), $imageName);
                $user->image=$imageName;
            }

            if($user->save()){
                 $this->notice::success('Successfully updated');
                return redirect()->route('user.index');
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
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user= User::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/employees/').$user->image;

        if($user->delete()){
            if(File::exists($image_path))
                File::delete($image_path);

            $this->notice::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
