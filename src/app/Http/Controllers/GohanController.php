<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GohanController extends Controller
{

    public function index()
    {

        return view('gohan.index');
    }
}
