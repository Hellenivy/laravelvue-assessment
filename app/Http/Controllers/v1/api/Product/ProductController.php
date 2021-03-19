<?php

namespace App\Http\Controllers\v1\api\Products;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Products::all();

        return response()->json([
            'products' => $product
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
        $products = new Products([
            'name' => $request->name,
            'description' => $request ->description,
            'quantity' => $request ->quantity
        ]);

        $products->save();

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
        $product = Products::find($id);

        return response()->json([
            'product' => $product
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


        $product = Products::find($id);

        $product = new Products([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity
        ]);

        $product->update();

        return response()->json([
            'message' => 'Product Updated Successfully',
            'product' => $product
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
        Products::where('id', $id)->delete();

        return response()->json([
            'message' => 'product delete succefully'
        ]);
    }
}
