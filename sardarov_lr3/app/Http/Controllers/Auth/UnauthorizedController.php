<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnauthorizedController extends Controller
{
    public function register_do(Request $request){
        $validated = $request->validate([
            'avatar' => 'file',
            'userName' => 'required',
            'login2' => 'required|unique:users,login2',
            'dateOfBirth'=>"date",
            'city'=>'required',
            'email'=> 'required|unique:users,email',
            'password2'=> 'required',
            'passwordRewrite'=>['required',function($attribute, $value, $fail){
                global $request;
                if ($request->get('password2') != $request->get('password2'))
                    $fail('the pass1 != pass2');
            }],
            'persData' => 'required',
            'phoneNumber' => 'required|unique:users,phoneNumber',
            'mailing' => 'required'
        ]);
        var_dump($validated);
        $avatar = $request->hasFile('avatar') ? $request->file('avatar') : false ;
        $avatar_path_tmp = $avatar ? $avatar->getPathname() : '';
        $validated['pic'] = $avatar ? 'avatars/'.$request->login2.'.jpg' : '';
        $validated['persData'] = $request->has('persData') ? 1 : 0;
        $validated['mailing'] = $request->has('mailing') ? 1 : 0;
        \App\Models\User::create($validated);

        if ($avatar){
            @mkdir('avatars');
            copy($avatar_path_tmp, $validated['pic']);
        }
        if (!Auth::guard()->attempt($validated)){
            return view('auth.message', ['message'=>'register_done_but_auth_error']);
        }



        return view('auth.message', ['message'=>'register_done']);
    }

    public function login_do(Request $request){
        $validated = $request->validate([
            'login2' => 'required',
            'password2'=> 'required',
        ]);

        if (!Auth::guard()->attempt($validated)){
            return view('auth.message', ['message'=>'auth_error']);
        }


        return view('auth.profile');
    }

}
