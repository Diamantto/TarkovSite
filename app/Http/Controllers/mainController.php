<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\usermodel;

use Illuminate\Support\Facades\Cookie;

class mainController extends Controller
{
	public function main() {
		return view('lending');
	}

	public function registration() {
		return view('registration');
	}

	public function maps() {
		return view('maps');
	}

	public function traders() {
		return view('traders');
	}

	public function login() {
		return view('login');
	}

	public function reg(Request $request) {
		$username = usermodel::all()->where('username', '=', $request->input('username'));
		$email = usermodel::all()->where('email', '=', $request->input('email'));
		if (count($username) === 1 | count($email) === 1) return redirect()->action('App\Http\Controllers\mainController@registration');
		$user = new usermodel();
		$user->username = $request->input('username');
		$user->email = $request->input('email');
		$user->password = $request->input('password');
		$user->save();
		Cookie::queue('name', $request->input('username'), 60);

		return redirect()->action('App\Http\Controllers\mainController@main');
	}

	public function log(Request $request) {
		$f = usermodel::all()
		->where('username', '=', $request->input('username'))
		->where('password', '=', $request->input('password'));

		if (count($f) !== 0) {
			Cookie::queue('name', $request->input('username'), 60);
			return redirect()->action('App\Http\Controllers\mainController@main');
		}
		else return redirect()->action('App\Http\Controllers\mainController@login');
	}

	public function logout() {
		Cookie::queue(Cookie::forget('name'));

		return redirect()->action('App\Http\Controllers\mainController@main');
	}
}
