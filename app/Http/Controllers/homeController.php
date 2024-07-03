<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $laundries = Laundry::all();
        return view('home');
    }
}
