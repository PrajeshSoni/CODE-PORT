<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrolleruser;

class EnrolleruserController extends Controller
{
    public function index()
    {
        return view('enrollerusers.index');
    }
    public function show($enrolleruser)
    {
        return view('enrollerusers.show', ['enrolleruser' => $enrolleruser]);
    }
    public function create()
    {
        return view('enrollerusers.create');
    }
    public function store()
    {
        $enrolleruser = new Enrolleruser();
        $enrolleruser->name = request('name');
        $enrolleruser->save();
        return redirect('enrollerusers.index');
    }
    public function edit($enrolleruser)
    {
        return view('enrollerusers.edit', ['enrolleruser' => $enrolleruser]);
    }
    public function update($enrolleruser)
    {
        $enrolleruser->name = request('name');
        $enrolleruser->save();
        return redirect('enrollerusers.index' . $enrolleruser->id);
    }
    public function destroy($enrolleruser)
    {
        $enrolleruser->delete();
        return redirect('enrollerusers.index');
    }
}
