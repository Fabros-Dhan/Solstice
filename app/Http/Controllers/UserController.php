<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;

class UserController extends Controller
{
    public function register(){
        $incomingFields = $request->validate([
            'name' => ['required', 'min:2', 'max:20', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required','min:6', 'max:30']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');
    }
}
