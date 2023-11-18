<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
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
        $data=User::paginate(10);
        return view('user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role=Role::get();
        return view('user.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try{
            $data=new User();
            $data->name_en=$request->userName_en;
            $data->name_bn=$request->userName_bn;
            $data->email=$request->EmailAddress;
            $data->contact_no_en=$request->contactNumber_en;
            $data->contact_no_bn=$request->contactNumber_bn;
            $data->role_id=$request->roleId;
            $data->status=$request->status;
            $data->full_access=$request->fullAccess;
            $data->language='en';
            $data->password=Hash::make($request->password);

            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/users'), $imageName);
                $data->image=$imageName;
            }

            if($data->save())
                return redirect()->route('user.index');
            else
                return redirect()->back()->withInput();
            
        }catch(Exception $e){
            //dd($e);
            return redirect()->back();
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
        return view('user.edit',compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try{
            $data=User::findOrFail(encryptor('decrypt',$id));
            $data->name_en=$request->userName_en;
            $data->name_bn=$request->userName_bn;
            $data->email=$request->EmailAddress;
            $data->contact_no_en=$request->contactNumber_en;
            $data->contact_no_bn=$request->contactNumber_bn;
            $data->role_id=$request->roleId;
            $data->status=$request->status;
            $data->full_access=$request->fullAccess;

            if($request->password)
                $data->password=Hash::make($request->password);

            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/users'), $imageName);
                $data->image=$imageName;
            }

            if($data->save())
                return redirect()->route('user.index');
            else
                return redirect()->back()->withInput();
            
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data= User::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/users/').$data->image;
        
        if($data->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);
            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }      
    }
}
