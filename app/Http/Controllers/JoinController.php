<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    
    public function join(){
        return view('form-join');
    }

    public function prosesJoin(Request $request){
        $request->validate([
            'username' =>'required'
        ]);
   
        $validUsername = ['Ani', 'Budi', 'Cantika','Putri Johanna'];

        if(in_array($request->username, $validUsername)){
            session(['username' => $request->username]);
            return redirect('/admin1');
        }else{
            return back()->withInput()->with('pesan', "Username tidak valid");
        }
    }

    public function logout(){
        session()->forget('username');
        return redirect('/join')->with('pesan', "Logout Berhasil");
    }

}
