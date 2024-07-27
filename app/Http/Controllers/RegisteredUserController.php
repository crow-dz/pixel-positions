<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Models\Employer;
use Illuminate\Support\Facades\Auth;
class RegisteredUserController extends Controller
{
   
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $userAttributes = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);
        $employerAttributes = $request->validate([
            'employer' => ['required', 'string', 'max:255'],
            'logo' => ['required', File::types(['png', 'jpg', 'jpeg','webp'])->max(1024)],
        ]);
        $user = User::create($userAttributes);
        $user->employer()->create([
            'user_id' => $user->id,
            'name' => $employerAttributes['employer'],
            'logo' => $employerAttributes['logo']->store('logos', 'public'),
        ]);
        Auth::login($user);
        return redirect('/'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
