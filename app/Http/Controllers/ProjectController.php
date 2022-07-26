<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{

public function single_product($id){

    $products = DB::table('products')->where('id',$id)->get();
    return view('single_product', compact('products'));

}



public function products(){

$products = DB::table('products')->get();
return view('products',['products'=>$products]);

}



public function category(Request $request,$category){

$products = DB::table('products')->where('category',$category)->get();
return view('products',['products'=>$products]);

}


    public function user_orders(){


        if(Auth::check()){

          $user_orders = DB::table('users')
          ->rightJoin('orders','users.id','=','orders.user_id')
         ->where('users.id',Auth::id())
         ->get();

         return view('user_orders',['user_orders'=>$user_orders]);


        }else{
           return redirect('/');

        }
    }


public function user_order_details(Request $request,$id){


if(Auth::check() && $id !=null){

    $details_array = DB::table('order_items')->where('order_id',$id)->get();

    return view('user_order_details',['details_array'=>$details_array,'order_id'=>$id]);
}

return redirect('/');
}



}
