<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Titik Persebaran Lapangan Futsal",
        ];

        //Check if user is logged in
        if (auth()->check()) {
            return view('index', $data);
        } else {
            return view('landing', $data);
        }
    }
    public function map()
    {
        $data = [
            "title" => "Titik Persebaran Lapangan Futsal",
        ];

        //Check if user is logged in
        if (auth()->check()) {
            return view('index', $data);
        } else {
            return view('index-public', $data);
        }
    }

    public function table()
    {
        $data = [
            "title" => "Table"
        ];
        return view('table', $data);
    }
    public function dashboard()
    {
        $data = [
            "title" => "Dashboard"
        ];
        return view('dashboard', $data);
    }
    public function landing()
    {
        $data = [
            "title" => "Landing"
        ];
        return view('landing', $data);
    }


}