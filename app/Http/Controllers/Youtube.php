<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Order;


class Youtube extends Controller
{

    public function index(){
        $data = User::all();
        return $data;
    }
    public function insert(Request $request){
       // print_r($request->input('user_id'));

        $order = new Order;
        $order->id = $request->input('id');

        echo $order->save();





    }
}
