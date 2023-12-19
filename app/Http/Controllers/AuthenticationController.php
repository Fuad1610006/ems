<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\Authentication\SignupRequest;
use App\Http\Requests\Authentication\SigninRequest;
use Illuminate\Support\Facades\Hash;
use Exception;
use Toastr;

class AuthenticationController extends Controller
{
    public function signUpForm(){
        return view('authentication.register');
    }

    public function signUpStore(SignupRequest $request){
        try{
            $user=new User;
            $user->name_en=$request->FullName;
            $user->contact_no_en=$request->contact_no_en;
            $user->email=$request->EmailAddress;
            $user->password=Hash::make($request->password);
            $user->role_id=3;
            if($user->save()){
              $this->notice::success('Successfully Registered');
              return redirect('login');
        }else{
            $this->notice::error('Please try again');
             return redirect('login');
        }
        }catch(Exception $e){
            // dd($e);
            $this->notice::error('Please try again');
            return redirect('login');
        }
        
    
    }

    public function signInForm(){
        return view('authentication.login');
    }

    public function signInCheck(SigninRequest $request){
        try{
            $user=User::where('contact_no_en',$request->username)
                        ->orWhere('email',$request->username)->first();
            if($user){
                if($user->status==1){
                    if(Hash::check($request->password , $user->password)){
                        $this->setSession($user);
                         $this->notice::success('Successfully login');
                        return redirect()->route('dashboard');
                    }else
                     $this->notice::error('Your phone number or password is wrong!');
                     return redirect()->route('login');
                }else
                 $this->notice::error('You are not active user. Please contact to authority!');
                 return redirect()->route('login');
        }else
         $this->notice::error('Your phone number or password is wrong!');
         return redirect()->route('login');
        }catch(Exception $e){
            dd($e);
             $this->notice::error('Your phone number or password is wrong!');
             return redirect()->route('login');
        }
    }

   public function setSession($user){
    $employee = $user->employee;

    return request()->session()->put([
        'userId' => encryptor('encrypt', $user->id),
        'userName' => encryptor('encrypt', $user->name_en),
        'role_id' => encryptor('encrypt', $user->role_id),
        'accessType' => encryptor('encrypt', $user->full_access),
        'role' => encryptor('encrypt', $user->role->type),
        'roleIdentity' => encryptor('encrypt', $user->role->identity),
        'language' => encryptor('encrypt', $user->language),
        'image' => $employee->image ?? 'No Image Found', 
    ]);
}

    public function signOut(){
        request()->session()->flush();
          $this->notice::error('Successfully Logged Out');
          return redirect('login');
    }
}
