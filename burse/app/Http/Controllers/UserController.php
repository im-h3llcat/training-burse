<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
	public function showProfile()
	{
		return view('user.profile', ['user' => null]);
	}

	public function showUser($id, $username)
	{
		return view('user.user', ['id' => $id, 'username' => $username]);
	}
}
