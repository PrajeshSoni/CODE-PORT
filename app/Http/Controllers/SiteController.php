<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function filterdata()
    {
        $data = collect([2, 3, 5, null, false, '', 0, []]);

        $data = $data->filter()->all();

        dd($data);
    }
}
