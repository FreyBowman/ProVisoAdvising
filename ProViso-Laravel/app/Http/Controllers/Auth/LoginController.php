<?php

namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use Hash;

class LoginController extends Controller
{
    //Login
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);

        $user = new User;

        $user->Email = $request->email;
        $user->Password = $request->password;
		
        // Check user is exist in the database
		$existinguser = User::select('Email', 'Password')->where('Email', '=', $user->Email, 'and', 'Password', '=', $user->Password)->first();

        if($existinguser and Hash::check($user->Password, $existinguser->Password))
        {
            Session::put('email' , $user->Email);
            return redirect('/dashboard');
        }

        return redirect('/register')->withErrors(['Incorrect Email or Password', 'Incorrect Email or Password.']);
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User;
        $user->Username = $request->username;
        $user->Email = $request->email;
        $user->Password = Hash::make($request->password);

        $existinguser = User::where('Email', '=', $user->Email)->first();

        if($existinguser)
        {
            return redirect('/register')->withErrors(['Email already in use', 'Email already in use']);
        }

        $user->save();
        Session::put('email', $user->Email);
        return redirect('/dashboard');
    }

    /*public function create(array $data)
    {
      return User::create([
        'username' => $data['Username'],
        'email' => $data['Email'],
        'password' => Hash::make($data['Password'])
      ]);
    }*/

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/register');
    }
}
