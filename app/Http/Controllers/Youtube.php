<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student;


class Youtube extends Controller
{

    public function index(){
        $data = Student::all();
        return $data;
    }

    public function showData($id){
        $data = Student::find($id);
        return $data;
    }

    /**
     * @param Request $request
     */
    public function insert(Request $request){


        $student = new Student();
        $student->id = $request->input('id');
        $student->name = $request->input('name');
        $student->age = $request->input('age');

        $result = $student->save();

        if ($result){
            echo 'record added!';
        }


    }
}
