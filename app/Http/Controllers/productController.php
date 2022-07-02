<?php

namespace App\Http\Controllers;
use App\Models\products;

use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return products::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $data = new products;
            $data->product_name = $request->product_name;
            $data->product_price = $request->product_price;
            $data->product_category = $request->product_category; 
            $data->product_quantity = $request->product_quantity;
            $data->product_url = $request->product_url;
            $data->product_description = $request->product_description;
            $saved = $data->save();
            if($saved){
                return response(["message"=>"Successfully saved"]);
            }
            
          }
          catch(\Exception $e){
            return $e->getMessage();
          }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = products::find($id);
        return $data;        
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
        $data = products::find($id);
            $data->product_name = $request->product_name;
            $data->product_price = $request->product_price;
            $data->product_category = $request->product_category; 
            $data->product_quantity = $request->product_quantity;
            $data->product_url = $request->product_url;
            $data->product_description = $request->product_description;
            $data->update();

            return response(["message"=>"Updated successfully"]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = products::destroy($id);
        if($data){
            return response(['message'=>'deleted successfully']);
        }
        else{
            return response(['message'=>'something went wrong']);
        }
        


    }
}
