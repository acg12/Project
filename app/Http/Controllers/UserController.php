<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $req) {
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            $credentials = [
                'email' => $req->email,
                'password' => $req->password
            ];

            if(Auth::attempt($credentials)){
                if($req->remember){
                    Cookie::queue('mycookie', $req->email, 60); //param3: satuan menit
                }else{
                    Cookie::queue(Cookie::forget('mycookie'));
                }
                Session::put('mysession', $credentials);
                return redirect('/login');
            }else{
                return redirect()->back()->withErrors(['Incorrect email or password']);
            }
        }
    }

    public function register(Request $req) {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password|min:8',
            'phone' => 'required|min:11',
            'address' => 'nullable'
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        } else {
            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = bcrypt($req->password);
            $user->phone_number = $req->phone;
            $user->address = $req->address;
            $user->save();

            return redirect('/');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
