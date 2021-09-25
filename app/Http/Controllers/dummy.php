<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class dummy extends Controller
{
    function getData()
    {
        return ["name"=>"Akshit","email"=>"Akshit@gmail.com",
        "Phone"=>"9205025418","address"=>"Muzaffarnagar"];
    }
    function list()
    {
          return Device::all();
    }
}
