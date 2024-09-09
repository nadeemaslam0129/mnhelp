<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=Gallery::all();
        return view('admin.gallery.managegallery',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
            'image'=>'required|mimes:png,jpg,jpeg',
            
        ]);
        $galler = new Gallery();
        if($request->hasFile('image'))
        {
        $file=$request->file('image');
        $imageName =uniqid().$file->getClientOriginalName();
        $request->file('image')->move('upload/galleryimages/',$imageName);
        $galler->image = 'upload/galleryimages/'.$imageName;
        $galler->save();
        return redirect()->back()->with('flash_message', 'Image Added Successfully');
        }
        return redirect()->back()->with('flash_message', 'Image Not Added Successfully');
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
        $edit = Gallery::findOrFail($id);
        return view('admin.gallery.edit',compact('edit'));
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
        $this->validate($request, [
            'image'=>'required|mimes:png,jpg,jpeg',
            
        ]);
        $upadte = Gallery::findOrFail($id);
        if($upadte)
        {
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $imageName =uniqid().$file->getClientOriginalName();
                $request->file('image')->move('upload/galleryimages/',$imageName);
                $upadte ->image = 'upload/galleryimages/'.$imageName;
                $upadte->save();
            }
            return redirect()->back()->with('flash_message', 'Image Updated Successfully');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Gallery::findOrFail($id);
        if($delete)
        {
               
            $delete->delete();
            return redirect()->back()->with('flash_message', 'Image Deleted Successfully');
        }else{
            return redirect()->back()->with('flash_message', 'Image Not Found Successfully');
        }
 }
}

