<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $client=Client::all();
        return view('admin.client.manageclient',compact('client'));
    }

    public function create()
    {
        return view('admin.client.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'position'=>'required',
            // 'assembly_mounting_tv'=>'required',
            'description'=>'required',
            'rating'=>'required',
            'image'=>'required',
        ]);
        $client = Client::create($request->all());
        $client->save();
        if($request->hasFile('image'))
        {
        $file=$request->file('image');
        $imageName =uniqid().$file->getClientOriginalName();
        $request->file('image')->move('upload/clientimage/',$imageName);
        $client->image = 'upload/clientimage/'.$imageName;
        $client->save();
        }
        return redirect()->back()->with('flash_message', 'Client Review Added Successfully');
    }

    public function edit($id)
    {
        $edit=Client::find($id);
        return view('admin.client.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'position'=>'required',
            // 'assembly_mounting_tv'=>'required',
            'description'=>'required',
            'rating'=>'required',
        ]
        );

        $edit = Client::findOrFail($id);
        if($edit)
        {
            $edit->update($request->all());
            $edit->save();
            if($request->hasFile('image'))
            {
            $file=$request->file('image');
            $imageName =uniqid().$file->getClientOriginalName();
            $request->file('image')->move('upload/clientimage/',$imageName);
            $edit ->image = 'upload/clientimage/'.$imageName;
            $edit->save();
            }
            return redirect()->back()->with('flash_message', 'Client Review Updated Successfully');
        }
    }
    public function destroy($id)
    {
        $data = Client::findOrFail($id);
        if($data)
        {    
            $data->delete();
            return redirect()->back()->with('flash_message', 'Client Review Deleted Successfully');
        }else{
            return redirect()->back()->with('flash_message', 'Client Review Not Found');
        }
    }
}
