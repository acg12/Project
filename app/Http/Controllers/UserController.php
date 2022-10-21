<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            //
        }
        else {
            $email = $req->email;
            $password = $req->password;

            // disini nti bikin if authentication succeed, maka kita akan bikin
            // session dan/atau cookies
            // tpi itu di ada di pelajaran lab sesi 4 apa 5 gitu :') jadi klo mau
            // ntn vbl dulu atau yaudah ntar terakhir aja
        }
    }
}
