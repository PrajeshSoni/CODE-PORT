<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrolleruser;
use Illuminate\Support\Facades\Auth;

class EnrolleruserController extends Controller
{
    public function store($id)
    {

        $enrolleruser = new Enrolleruser();
        $enrolleruser->user_id = Auth::user()->id;
        $enrolleruser->course_id = $id;
        // dd($enrolleruser);
        $enrolleruser->save();

        return redirect()->route('subcourses.index', ['course_id' => $id]); // Use route helper for better readability
    }
}
