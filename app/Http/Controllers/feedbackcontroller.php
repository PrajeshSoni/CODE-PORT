<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Carbon\Carbon;


class feedbackcontroller extends Controller
{
    function create()
    {
        return view('feedback.create');
    }
    function store(Request $req)
    {
        $date = date('Y-m-d');
        $req->validate([
            'f_name' => 'required',
            'f_email' => 'required',
            'message' => 'required',
        ]);
        $praj = new Feedback();
        $praj->f_name = $req->f_name;
        $praj->f_email = $req->f_email;
        $praj->message = $req->message;
        $praj->f_date = $date;


        $praj->save();
        return redirect()->back()
            ->with('success', 'Recode insert successfully.');
    }
}
