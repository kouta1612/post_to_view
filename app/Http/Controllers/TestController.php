<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store()
    { }

    public function showConfirm()
    {
        return view('confirm');
    }

    public function confirm()
    {
        return view('create');
    }

    public function showComplete()
    {
        return view('complete');
    }

    public function complete()
    {
        return view('create');
    }
}
