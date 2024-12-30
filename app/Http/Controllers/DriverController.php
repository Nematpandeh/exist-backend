<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function deliverOrder_ok(Request $request)
    {
        $driver = Driver::find($request->driver_id);
        if ($driver) {
            if ($driver->user->order->code == $request->order_code) {
            $driver->user->order->status = 'delivered';
            return response()->json(['message' => 'Order delivered successfully'], 200);
            } else {
            return response()->json(['error' => 'Order code does not match'], 400);
            }
        } else {
            return response()->json(['error' => 'Driver not found'], 404);
        }
    }
}
