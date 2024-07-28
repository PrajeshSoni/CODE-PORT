<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Reply;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReplyController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:replay-list|replay-create|replay-edit|replay-delete', ['only' => ['index', 'show']]);
    //     $this->middleware('permission:replay-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:replay-delete', ['only' => ['delete']]);
    // }
    function index($id)
    {
        $question = Question::where('id', '=', $id)->first();
        $replies = Reply::where('q_id', '=', $id)->orderBy('id', 'DESC')->get();
        return view('reply.index', compact('replies', 'question'));
    }
    function store(Request $req)
    {
        $date = date('Y-m-d');
        $req->validate([
            'reply' => 'required',
            'q_id' => 'required',
        ]);
        $praj = new Reply();
        $praj->reply = $req->reply;
        $praj->r_date = $date;
        $praj->u_id = auth()->user()->name;
        $praj->q_id = $req->q_id;
        $praj->save();
        return redirect()->back()
            ->with('success', 'Recode insert successfully.');
    }
    function delete($id)
    {
        Reply::destroy($id);
        return redirect()->back();
    }

    function show()
    {
        $repliesshow = Reply::join('questions as q', 'q.id', '=', 'replies.q_id')
            ->select('replies.reply', 'q.q_title', 'replies.u_id', 'replies.id',)
            ->get();
        // dd($repliesshow);

        return view("reply.show", compact("repliesshow"));
    }
}
