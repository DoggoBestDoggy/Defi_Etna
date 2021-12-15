<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class trombi extends Controller
{
    public function add_profile(Request $request)
    {

        $validated = $request->validate([
            'login' => ['required', 'min:1', 'max:8'],
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email', 'unique:profiles'],
            'picture' => ['required'],
            'work' => ['required', 'max:45'],
            'role' => ['required', 'integer', 'max:1']
        ]);

        $Profile = Profile::create($validated);


        return redirect('/');
    }
}
