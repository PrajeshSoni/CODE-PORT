<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrolleruser;
use Illuminate\Support\Facades\Auth;

class EnrolleruserController extends Controller
{
    public function store()
    {
        $enrolleruser = new Enrolleruser();
        $enrolleruser->user_id = Auth::user()->id;
        $enrolleruser->course_id  = request('course_id');
        $enrolleruser->save();
        return redirect('Course.index');
    }
}
