<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    public function index(){
        $data =User::all();
        return response()->json($data);
    }

    public function showData($id){
        $data = User::find($id);
        return $data;
    }

    public function delete(Request $request , $id){

        $user = User::find($id);
        $user->delete();

        return response() -> json($user);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $result = $user->save();
        if ($result){
            return response()->json($user);
        }
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
