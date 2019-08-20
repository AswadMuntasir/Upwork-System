<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\freelancer;

class logincontroller extends Controller
{
    public function index(){	

		return view('login.index');
	}

	public function verify(Request $req){	

		$result = freelancer::where('username', $req->username)
				->where('password', $req->password)
				->get();
		
		//echo $result[0]->type;

		if(count($result) > 0){

			$req->session()->put('user', $req->username);
			$req->session()->put('type', $result[0]->type);

			if($result[0]->type=="Admin")
			{
				return redirect()->route('home.index');
			}
			else
			{
				return redirect()->route('home.index');
			}


		}else{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
			//return view('login.index');
		}
	}
}
