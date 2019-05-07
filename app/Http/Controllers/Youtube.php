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

    /**
     * @param Request $request
     */
    public function insert(Request $request){


        $order = new Order();
        $order->id = $request->input('id');
        $order->OrderNumber = $request->input('OrderNumber');
        $order->user_id = $request->input('user_id');

        $result = $order->save();

        if ($result){
            echo 'record added!';
        }









    }
}
