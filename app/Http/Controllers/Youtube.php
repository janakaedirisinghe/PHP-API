<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    public function index(){
        $data =User::all();
        return $data;
    }

    public function showData($id){
        $data = User::find($id);
        return $data;
    }

    /**
     * @param Request $request
     */
    public function insert(Request $request){


        $user = new User();
        $user->id = $request->input('id');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');

        $result = $user->save();

        if ($result){
            echo 'record added!';
        }


    }

}
