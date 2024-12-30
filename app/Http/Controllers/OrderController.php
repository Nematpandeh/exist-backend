<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    protected $fillable = ['code'];
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->name = $request->costomer_name;
        $order->code = $request->otp_code;
        $order->status = 'pending';
        $order->user_id = $request->user_id;
        $order->save();
        return response()->json(['message' => 'Order created successfully'], 201);
    }
}
