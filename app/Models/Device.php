<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function list()
    {
        $users = DB::table('devices')->select('Id','FirstName', 'LastName',
        'Email','Dob','Mobile','Designation','Gender','Hobbies')->get();
    }
}
