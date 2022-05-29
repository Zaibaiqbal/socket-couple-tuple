<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\LivingIn;
use App\Models\ProfileFor;
use App\Models\Religion;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $profileFor = ProfileFor::all();
        // dd($profileFor);
        $religion = Religion::all();
        $community = Community::all();
        $countries = DB::table('country')->select('name')->get();

        return view('auth.register',get_defined_vars());
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'profile_for' => ['required'],
            'last_name' => ['required'],
            'dob' => ['required'],
            'first_name' => ['required'],
            'gender' => ['required'],
            'religion' => ['required'],
            'community' => ['required'],
            'living_in' => ['required'],
            'password' => ['required'],

        ]);

        $user = User::create([
            'profile_for' => $request->input('profile_for'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'religion' => $request->input('religion'),
            'community' => $request->input('community'),
            'living_in' => $request->input('living_in'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password),
        ]);


        event(new Registered($user));

        Auth::login($user);

        return redirect('/verify-email');

//        return redirect(RouteServiceProvider::HOME);


    }
}
