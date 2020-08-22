<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Inventory;
use App\Product;
use DB;

class InventoryController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = Inventory::all();
        // $user = Auth::user();
        // $inventories = Inventory::where('farmerID', $user->id);
        $products = Product::all();
        return view('admin-inventory')->with('inventories', $inventories)->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'product' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'um' => 'required'
        ]);

        $user = auth()->user();
        $productID = DB::table('products')->where('productName',$request->product)->value('productID');
        $categoryID = DB::table('products')->where('productName',$request->product)->value('categoryID');

        $inventory = new Inventory;
        $inventory->farmerID = $user->id;
        $inventory->productID = $productID;
        $inventory->productDescription = $request->desc;
        $inventory->categoryID = $categoryID;
        $inventory->qty = $request->qty;
        $inventory->price = $request->price;
        $inventory->save();
        
        return redirect()->route('admin.inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventory = DB::table('inventories')->where('inventoryID',$id);
        $inventory->delete();
        return redirect()->route('admin.inventory');
    }
}
