<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AuthController extends Controller
{
	public function showLogin()
	{
		return view('auth.login');
	}

	public function showRegister()
	{
		return view('auth.register');
	}
}
