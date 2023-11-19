<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\Authentication\SignupRequest;
use App\Http\Requests\Authentication\SigninRequest;
use Illuminate\Support\Facades\Hash;
use Exception;

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
            $user->role_id=4;
            if($user->save())
                return redirect('login');
            else
                return redirect('login');
        }catch(Exception $e){
            // dd($e);
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
                if(Hash::check($request->password , $user->password)){
                    $this->setSession($user);
                    return redirect()->route('dashboard');
                }else
                    return redirect()->route('login');
            }else
                return redirect()->route('login');
            }catch(Exception $e){
                dd($e);
                return redirect()->route('login');
            }
        }
    
        public function setSession($user){
            return request()->session()->put([
                    'userId'=>encryptor('encrypt',$user->id),
                    'userName'=>encryptor('encrypt',$user->name),
                    'role'=>encryptor('encrypt',$user->role->type),
                    'role_id'=>encryptor('encrypt',$user->role_id),
                    'accessType'=>encryptor('encrypt',$user->full_access),
                    'roleIdentity'=>encryptor('encrypt',$user->role->identity),
                    'language'=>encryptor('encrypt',$user->language),
                    'image'=>$user->image ?? 'no-image.png'
                ]
            );
        }
    
        public function singOut(){
            request()->session()->flush();
            return redirect('login');
        }
    }
    
    