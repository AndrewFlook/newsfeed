<?php

namespace App\Http\Controllers\Account;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class SecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.security.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'password' => ['required', Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised()],
        ];

        $this->validate($request, $rules);

        // Manually validate the user's existing hashed password.
        if (!Hash::check($request->input('password_old'), Auth::user()->password)) {
            return back()->withErrors('Invalid credentials.');
        } else {
            // Update the user's password.
            Auth::user()->password = Hash::make($request->input('password'));
            Auth::user()->password_updated_at = Carbon::now();
            Auth::user()->save();

            // Flash the session
            Session::flash('title', 'Success!');
            Session::flash('message', 'Your password has been successfully changed.');
            Session::flash('color', 'emerald');

            // Return the user back.
            return redirect()->route('account.security.index');
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
