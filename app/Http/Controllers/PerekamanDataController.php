<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerekamanDataController extends Controller
{
    public function index()
    {
        return view('perekaman.index');
    }

    public function create()
    {
        return view('perekaman.create');
    }
}
