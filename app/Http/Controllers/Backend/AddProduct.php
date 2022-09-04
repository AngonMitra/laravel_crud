<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AddProductsModel;

class AddProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproduct()
    {
        return view('backend.addproducts');
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
    public function productstore(Request $request)
    {
        $obj = new AddProductsModel();

        $obj->ptitle = $request->ptitle;
        $obj->pdes = $request->pdes;
        $obj->category = $request->category;
        $obj->price = $request->price;

        $obj->save();
        return view('backend.addproducts');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showproduct()
    {
        $show = AddProductsModel::all();
        return view('backend.showproducts', compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editproduct($id)
    {
        $products = AddProductsModel::find($id);
        return view('backend.editproduct',  compact("products"));
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
        $products = AddProductsModel::find($id);

        $products->ptitle = $request->ptitle;
        $products->pdes = $request->pdes;
        $products->category =$request->category;
        $products->price =$request->price;

        $products->update();
        return redirect()->route("showproduct");
        
    }

    public function delete($id){
        $delete = AddProductsModel::find($id);
        $delete->delete();
        return redirect()->route("showproduct");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
