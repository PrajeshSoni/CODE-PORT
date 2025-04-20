<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::join('users', 'feedback.user_id', '=', 'users.id')
            ->select('feedback.*', 'users.name as user_name')
            ->get();
        return view('feedback.index', compact('feedbacks'));
    }
    function create()
    {
        return view('feedback.create');
    }
    function store(Request $req)
    {
        $req->validate([
            'f_name' => 'required',
            'message' => 'required',
        ]);
        $praj = new Feedback();
        $praj->f_name = $req->f_name;
        $praj->user_id = Auth::user()->id;
        $praj->message = $req->message;

        $praj->save();
        return redirect()->back()
            ->with('success', 'Recode insert successfully.');
    }
    function edit($id)
    {
        $feedback = Feedback::find($id);
        return view('feedback.edit', compact('feedback'));
    }
    function update(Request $req, $id)
    {
        $req->validate([
            'f_name' => 'required',
            'message' => 'required',
        ]);
        $praj = Feedback::find($id);
        $praj->f_name = $req->f_name;
        $praj->user_id = Auth::user()->id;
        $praj->message = $req->message;

        $praj->save();
        return redirect()->route('feedback.index')
            ->with('success', 'Recode update successfully.');
    }
    function delete($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect()->back()
            ->with('success', 'Recode delete successfully.');
    }
    function show($id)
    {
        $feedback = Feedback::find($id);
        return view('feedback.show', compact('feedback'));
    }
    function destroy($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect()->back()
            ->with('success', 'Recode delete successfully.');
    }
}
