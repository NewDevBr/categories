<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Products, Categories};

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::with("categorie")->get();
        return view("products", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view("newproducts", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products;
        $product->name = $request->input("productname");
        $product->stock = $request->input("howmanystock");
        $product->price = $request->input("price");
        $product->categorie_id = $request->input("category");
        $product->save();
        return redirect("/products");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::all();
        $product = Products::find($id);
        if(isset($product)){
            return view("producteditor", compact("product","categories"));
        }
        return redirect("/products");
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
        if(isset($product)){
            $product->name = $request->input("productname");
            $product->stock = $request->input("howmanystock");
            $product->price = $request->input("price");
            $product->categorie_id = $request->input("category");
            $product->save();
        }
        return redirect("/products");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        if(isset($product)){
            $product->delete();
        }
        return redirect("/products");
    }
}
