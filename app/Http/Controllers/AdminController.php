<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Contact;
use App\Models\DateModel;
use App\Models\TimeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function admindashboard(){
      $data['date']=DateModel::count();
      $data['times']=TimeModel::count();
        return view('admin.admindashboard',$data);
    }
    public function profile(){
      $profile = User::Find(Auth::User()->id);
    
       return view('admin.adminprofile',compact('profile'));
      
}
public function adminprofileupdate(Request $request){
  
       $this->validate($request, [
           'name' => 'required',
           'email' => 'required'
       ]);
       $update = User::findOrFail(Auth::User()->id);
       $update->name=$request->name;
       $update->email=$request->email;
       if($request->hasFile('image'))
        {
        $file=$request->file('image');
        $imageName =uniqid().$file->getClientOriginalName();
        $request->file('image')->move('upload/profileimage/',$imageName);
        $update->image = 'upload/profileimage/'.$imageName;
        $update->update();
        }
     if(!is_null($request->password)){
       $update->password= Hash::make($request->password);
       $update->update();
       return redirect('profile')->with('flash_message', 'Profile Updated Successfully');
     }else{
       $update->update();
       return redirect('profile')->with('flash_message', 'Profile Updated Successfully');
     }
    
}
    public function manageschedule(){
          $data['schedule']=DateModel::orderBy('id','desc')->get();
          return view('admin.schedule.manageschedule',$data);
    }
    public function schedule_create(){
      return view('admin.schedule.create');
    }
    public function schedule_store(Request $request){
      $this->validate($request, [
        'date' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
      ]);
      
      $adddate=new DateModel;
      $adddate->date=Carbon::createFromFormat('Y-m-d', $request->date)->format('d-m-Y');
      $adddate->save();
      foreach (range($request->start_time, $request->end_time) as $number) {
        $slot = $number.' '.$request->label;
        $addtime= new TimeModel;
        $addtime->tv_date_id=$adddate->id;
        $addtime->time=$slot;
        $addtime->save();
      }
      
     return redirect()->route('admin.schedule')->with('flash_message', 'Schedule Added Successfully');
    }
    
    public function schedule_edit($id)
    {
    $date['getDate'] = DateModel::with('getTimes')->find($id);
    return view('admin.schedule.edit', $date);
    }

    public function schedule_update(Request $request){
      $this->validate($request, [
        'date' => 'required',
        'time' => 'required',
      ]);
      $adddate=DateModel::find($request->date_id);
      $adddate->date=Carbon::createFromFormat('Y-m-d', $request->date)->format('d-m-Y');
      $adddate->save();
      TimeModel::where('tv_date_id',$adddate->id)->delete();
      if(!empty($request->time)){
        foreach($request->time as $time){
            $addtime= new TimeModel;
            $addtime->tv_date_id=$adddate->id;
            $addtime->time=$time;
            $addtime->save();
        }
     }
     return redirect()->route('admin.schedule')->with('flash_message', 'Schedule Updated Successfully'); 
    }
    public function schedule_delete($id){
      $adddate=DateModel::find($id);
      if(!empty($adddate)){
        $adddate->delete();
        TimeModel::where('tv_date_id',$adddate->id)->delete();
        return redirect()->route('admin.schedule')->with('flash_message', 'Schedule Deleted Successfully'); 
      }else{
        return redirect()->route('admin.schedule')->with('flash_message', 'Schedule Not Deleted Successfully'); 
      }
    }
    public function displaycontact(){
      $contacts=Contact::all();
      return view('admin.contact.managecontact',compact('contacts'));
    }
    public function destroy($id)
    {
        $data = Contact::findOrFail($id);
        if($data)
        {  
            $data->delete();
            return redirect()->back()->with('flash_message', 'Contact us Deleted Successfully');
        }else{
            return redirect()->back()->with('flash_message', 'Contact us Found Successfully');
        }
   }
}

