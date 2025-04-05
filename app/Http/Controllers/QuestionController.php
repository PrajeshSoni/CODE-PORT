<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Tag;

use DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB as FacadesDB;

class QuestionController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:Question-list|Question-create|Question-edit|Question-delete', ['only' => ['index', 'show']]);
    //     $this->middleware('permission:Question-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:Question-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:Question-delete', ['only' => ['delete']]);
    // }
    function create()
    {
        $Questions = Tag::all();


        return view('Question.create', compact('Questions'));
    }



    function store(Request $req)
    {
        $req->validate([
            'q_title' => 'required',
            'q_body' => 'required',
            't_id' => 'required',
        ]);
        $p = new Question();
        $p->q_title = $req->q_title;
        $p->q_body = $req->q_body;
        $p->user_id = auth()->user()->id;
        $p->t_id = $req->t_id;
        $p->save();
        return redirect()->back()
            ->with('success', 'Recode insert successfully.');
    }
    function index()
    {
        $Questions = FacadesDB::table('tags')
            ->crossJoin('questions')
            ->select('tags.*', 'questions.*')
            ->where('questions.t_id', '=', FacadesDB::raw('tags.id'))
            ->get();
        return view("Question.index", compact("Questions"));
    }
    function delete($id)
    {

        $Questions = Question::find($id);
        $Questions->delete();
        return redirect()->back();
    }
    function edit($id)
    {
        $Questions = Question::find($id);
        $Ques = tag::all();

        return view('Question.update', ['Questions' => $Questions], compact('Ques'));
    }
    function update(Request $requ)
    {
        $Questions = Question::find($requ->id);
        $Questions->q_title = $requ->q_title;
        $Questions->q_body = $requ->q_body;
        $Questions->t_title = $requ->t_title;

        $Questions->save();
        return redirect('/question/show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
    function show($id = 0)
    {
        $tags = Tag::all();

        $questionshow = Question::join('tags', 'questions.t_id', 'tags.id')
            ->select('questions.*', 'tags.t_title')
            ->get();

        if ($id != 0) {
            $questionshow = Question::join('tags', 'questions.t_id', 'tags.id')
                ->where('tags.id', '=', $id)
                ->select('questions.*', 'tags.t_title')
                ->get();
        }

        return view('Question.show', compact('tags', 'questionshow'));
    }
}
