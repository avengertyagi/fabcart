<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class Dyanamic extends Controller
{
    public function index()
    {
        $students = Menu::all();
        return view('index');
    }
}
