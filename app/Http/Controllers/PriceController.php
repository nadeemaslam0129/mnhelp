<?php

namespace App\Http\Controllers;

use App\Models\PriceModel;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $data['getPrice']=PriceModel::get();
        return view('admin.price.manageprice',$data);
    }
    public function create()
    {
        return view('admin.price.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required'
        ]);
         $store=new PriceModel();
         $store->price_status=$request->name;
         $store->price=$request->price;
         $store->save();
         if($store){
            return redirect('price')->with('flash_message', 'Price Added Successfully');
         }else{
            return redirect('price')->with('flash_message', 'Price Not Added');
         }
     }

    public function edit($id) 
    {
        $data['getSinglePrice']=PriceModel::find($id);
        return view('admin.price.edit',$data);
    }
    
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required'
        ]);
        $update=PriceModel::find($id);
        $update->price_status=$request->name;
        $update->price=$request->price;
        $update->save();
        if($update){
           return redirect('price')->with('flash_message', 'Price Updated Successfully');
        }else{
           return redirect('price')->with('flash_message', 'Price Not Updated');
        }
    }

   public function destroy($id) 
   {
     $getRecord=PriceModel::find($id);
     $getRecord->delete();
     return redirect('price')->with('flash_message', 'Price Deleted Successfully');
   }
}
