<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Youtube extends Controller
{

    public function index(){
        $data = User::all();
        return $data;
    }
}
