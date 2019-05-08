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

    public function delete($id){
        $result = User::where('id',$id)->delete();
        if ($result){
            echo "record deleted successfully";
        }else{
            echo "failed to delete.";
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
