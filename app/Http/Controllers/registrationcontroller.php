<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\freelancer;

class registrationcontroller extends Controller
{
    public function index(Request $req){	
    	//$req->session()->flush();
		return view('registration.index');
	}
	public function signuppost(Request $req){

		$fname = $req->fname;
		$lname = $req->lname;
		$email = $req->email;

		if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
			$fnameErr = "Only letters and white space allowed";
			$req->session()->flash('fnmsg', $fnameErr);
			return redirect()->route('registration.index');
		}
		else if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
			$lnameErr = "Only letters and white space allowed";
			$req->session()->flash('lnmsg', $lnameErr);
			return redirect()->route('registration.index');
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format"; 
			$req->session()->flash('emsg', $emailErr);
			return redirect()->route('registration.index');
		}
		else {
			//$req->session()->flush();
			$req->session()->put('fname', $req->fname);
			$req->session()->put('lname', $req->lname);
			$req->session()->put('email', $req->email);
			return redirect()->route('registration.index2');
		}
	}
	public function signup2(Request $req){
		return view('registration.index2');
	}
	public function signuppost2(Request $req){
		$freelancer = new freelancer();

		$password = $req->password;

		if (strlen($_POST["password"]) <= '4') {
            $passwordErr = "Your Password Must Contain At Least 4 Characters!";
            $req->session()->flash('msg', $passwordErr);
            return redirect()->route('registration.index2');
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
            $req->session()->flash('msg', $passwordErr);
            return redirect()->route('registration.index2');
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
            $req->session()->flash('msg', $passwordErr);
            return redirect()->route('registration.index2');
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
            $req->session()->flash('msg', $passwordErr);
            return redirect()->route('registration.index2');
        } else {
        	$freelancer->password = $req->password;
        	
        	$freelancer->email = $req->session()->get('email');

			$freelancer->country = $req->country;
        	$freelancer->username = $req->username;
			$freelancer->type = $req->type;

			$freelancer->worktitle = "Frontend";
			$freelancer->workdetails = "fgh";
			$freelancer->experience = "rty";
			$freelancer->title = "mobile developer";
			$freelancer->titledetails = "dgf";
			$freelancer->english = "dfgd";
			$freelancer->rate = "3";
			$freelancer->hour = "more than 30hr/week";
			$freelancer->phoneno = "01521405864";
			$freelancer->status = "active";

			$freelancer->save();
			$req->session()->flush();
			return view('registration.index3');
		}
	}

	public function signup3(Request $req){
		
		//echo "as";
		return view('registration.index3');
	}
}
