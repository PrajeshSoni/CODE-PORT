<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\App;

class TagController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:Tag-list|Tag-create|Tag-edit|Tag-delete', ['only' => ['index', 'show']]);
    //     $this->middleware('permission:Tag-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:Tag-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:Tag-delete', ['only' => ['destroy']]);
    // }
    function create()
    {
        return view('Tag.create');
    }

    function store(Request $req)
    {
        $req->validate([
            't_title' => 'required',
            't_des' => 'required',
            't_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $req->file('t_icon');
        $fileName = time() . $file->getClientOriginalName();
        $destinationPath = public_path() . '/icon';
        $file->move($destinationPath, $fileName);


        $p = new Tag();
        $p->t_title = $req->t_title;
        $p->t_des = $req->t_des;
        $p->t_icon = $fileName;
        $p->save();
        return redirect()->back()
            ->with('success', 'Recode insert successfully.');
    }
    function index()
    {
        $data = Tag::all();
        return view("Tag.index", compact("data"));
    }
    function delete($id)
    {

        $data = Tag::find($id);
        $data->delete();
        return redirect()->back();
    }
    function edit($id)
    {
        $data = Tag::find($id);
        return view('Tag.update', ['data' => $data]);
    }
    function update(Request $requ)
    {
        $file = $requ->file('t_icon');
        $fileName = time() . $file->getClientOriginalName();
        $destinationPath = public_path() . '/icon';
        $file->move($destinationPath, $fileName);
        $data = Tag::find($requ->id);
        $data->t_title = $requ->t_title;
        $data->t_des = $requ->t_des;
        $data->t_icon = $fileName;



        $data->save();
        return redirect('/tag/index');
    }
    function showtag()
    {
        $tagshow = Tag::all();
        return view("Tag.show", compact("tagshow"));
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
}
