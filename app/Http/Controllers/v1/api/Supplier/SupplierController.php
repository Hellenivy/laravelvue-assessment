<?php

namespace App\Http\Controllers\v1\api\Products;

use App\Http\Controllers\Controller;
use App\Models\;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Suppliers::all();

        return response()->json([
            'suppliers' => $supplier
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
        $suppliers = new Suppliers([
            'name' => $request->name
        ]);

        $suppliers->save();

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
        $supplier = Suppliers::find($id);

        return response()->json([
            'supplier' => $supplier 
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


        $supplier = Suppliers::find($id);

        $supplier = new Suppliers([
            'nae' => $request->name
        ]);

        $supplier->update();

        return response()->json([
            'message' => 'Supplier Updated Successfully',
            'supplier' => $supplier
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
        Suppliers::where('id', $id)->delete();

        return response()->json([
            'message' => 'supplier delete succefully'
        ]);
    }
}
