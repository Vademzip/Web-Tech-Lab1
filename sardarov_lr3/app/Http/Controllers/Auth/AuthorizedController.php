<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorizedController extends Controller
{
    public function profile_update(Request $request){
        $validated = $request->validate([
            'userName' => 'required',
//            'avatar' => 'file',
//            'login2' => 'required|unique:users,login2',
//            'city'=>'required',
//            'email'=> 'required|unique:users,email',
//            'password2'=> 'required',
//            'passwordRewrite'=>['required',function($attribute, $value, $fail){
//                global $request;
//                if ($request->get('password2') != $request->get('password2'))
//                    $fail('the pass1 != pass2');
//            }],
//            'phoneNumber' => 'required|unique:users,phoneNumber',
        ]);
        var_dump($validated);
        $avatar = $request->hasFile('avatar') ? $request->file('avatar') : false ;
        $avatar_path_tmp = $avatar ? $avatar->getPathname() : '';
        $validated['pic'] = $avatar ? 'avatars/'.$request->login2.'.jpg' : '';
        $validated['persData'] = $request->has('persData') ? 1 : 0;
        $validated['mailing'] = $request->has('mailing') ? 1 : 0;


        $user = Auth::user();
        // \App\Models\User::findOrFail(Auth::guard()->user()->id);
        $user->userName = $validated['userName'];
        $user->save();


        if ($avatar){
            @mkdir('avatars');
            copy($avatar_path_tmp, $validated['pic']);
        }

        return view('auth.message', ['message'=>'profile_updated']);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect('/s/home');
    }

}
