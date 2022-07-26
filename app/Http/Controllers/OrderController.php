<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{

    public function index()
    {

        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function changeStatus(Request $request , $id)
    {
        $order = Order::find($id);
        Order::where('id', $id)->update(['status' => $request->status]);
        return back();

    }


}
