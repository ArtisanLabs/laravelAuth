<?php

namespace App\Http\Controllers\Auth;

use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(){
		$this->middleware('guest');
	}

	/**
	 * Authenticate the admin
	 * @param Request $request
	 * @return Request
	 */
	public function login(Request $request){
		// Validate the request
		$this->validate($request, [
			'email' => 'email|required',
			'password' => 'required'
		]);

		// Login credentials
		$credentials = [
			'email' => $request->email,
			'password' => $request->password
		];

		// Attempt to login the admin
		if (!auth()->guard('admin')->attempt($credentials)) {
			alert()->error('Sorry. These credentials do not match our credentials.', 'Login Failed')->persistent('Try Again');

			return redirect()->back()->withInput(
				$request->except('password')
			);
		}

		// Redirect to the dashboard
		return redirect()->route('admin.home');
	}
}
