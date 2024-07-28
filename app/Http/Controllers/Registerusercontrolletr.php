<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Registerusercontrolletr extends Controller
{
    function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            // 'b_date' => 'required',
            'p_no' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);
        $p = new User();
        $p->name = $req->name;
        $p->b_date = $req->b_date;
        $p->p_no = $req->p_no;
        $p->email = $req->email;
        $p->password = Hash::make('secret');
        $p->save();
        return redirect()->back()
            ->with('success', 'Recode insert successfully.');
    }
}
