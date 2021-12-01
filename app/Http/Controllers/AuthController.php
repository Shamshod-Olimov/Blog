<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
	function adminLogin(Request $req){

    	$email =  $req->input('email');
    	$pass =  $req->input('password');

    	$DB = DB::select("SELECT * FROM admins WHERE email='$email' AND password='$pass'");

		if($DB)
        {
			$req->session()->put('admin', $DB);
			return redirect('profile');
		} else {
			echo "<script>alert('Email yoki parol xato!');</script>";
			return redirect('admin');
		}
	}
}
