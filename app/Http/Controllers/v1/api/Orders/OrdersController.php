<?php

namespace App\Http\Controllers\v1\api\Orders;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Orders::all();

        return response()->json([
            'orders' => $order
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orders = new Orders([
            'order_number' => $request->order_number
        ]);

        $orders->save();

        return response()->json([
            'message' => 'Added successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Orders::find($id);

        return response()->json([
            'order' => $order 
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $order = Orders::find($id);

        $order = new Orders([
            'order_number' => $request->order_number
        ]);

        $order->update();

        return response()->json([
            'message' => 'Order Updated Successfully',
            'order' => $order
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orders::where('id', $id)->delete();

        return response()->json([
            'message' => 'order delete succefully'
        ]);
    }
}
