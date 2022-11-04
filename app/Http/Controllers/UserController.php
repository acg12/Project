<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
            $email = $req->email;
            $password = $req->password;

            if(Auth::attempt(['email' => $email, 'password' => $password], true)){
                return redirect('/');
            }else{
                return redirect()->back()->withErrors(['Incorrect email or password']);
            }

            // disini nti bikin if authentication succeed, maka kita akan bikin
            // session dan/atau cookies
            // tpi itu di ada di pelajaran lab sesi 4 apa 5 gitu :') jadi klo mau
            // ntn vbl dulu atau yaudah ntar terakhir aja
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
            $name = $req->name;
            $email = $req->email;
            $password = $req->password;
            $phone = $req->phone;
            $address = $req->address;

            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'phone_number' => $phone,
                'address' => $address,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            return redirect('/');
        }

    }
}
