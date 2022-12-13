<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GohanController extends Controller
{

    public function index(Request $request)
    {

        $data['exchange'] = $request->input('rice');
        $data['kcal'] = ($data['exchange'] * 240);

        return view('gohan.index', $data);
    }
}
