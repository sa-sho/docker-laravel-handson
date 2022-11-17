<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('regist.register');
    }

    public function store(Request $request)
    {
        $user = new User;
        
        $request->validate([
             'name' => 'required|string|max:255',
            // テストのため、コメントアウト
             'email' => 'required|string|email|max:255|unique:users',
             'email' => 'required',
             'password' => 'required|string|confirmed|min:8',
         ]);
        //  dd('stop');
        // $validator = Validator::make(
        //     $request->all(),
        //     [
        //         'name' => 'required',
        //         'email' => 'required',
        //         'password' => 'required',
        //     ]
        // );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return view('regist.complete', compact('user'));
    }
}