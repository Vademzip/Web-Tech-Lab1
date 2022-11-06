<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class UnauthorizedController extends Controller
{
    public function register_do(Request $request){
        $validated = $request->validate([
            'avatar' => 'file',
            'userName' => 'required',
            'login2' => 'required|unique:users,login2',
            'dateOfBirth'=>"date",
            'city',
            'email'=> 'required|unique:users,email',
            'password2'=> 'required',
            'passwordRewrite'=>['required',function($attribute, $value, $fail){
                global $request;
                if ($request->get('password2') != $request->get('password2'))
                    $fail('the pass1 != pass2');
            }],
            'persData' => 'required',
            'number' => 'required|unique:users,number'
        ]);
        var_dump($validated);
    }
}
