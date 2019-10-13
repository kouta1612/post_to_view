<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function confirm(Request $request)
    {
        $data = $request->input;
        session(['data' => $data]);
        return view('confirm', compact('data'));
    }

    public function complete(Request $request)
    {
        $data = session('data');
        session()->regenerate();
        return view('complete', compact('data'));
    }
}
