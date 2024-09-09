<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Assembly;
use App\Models\DateModel;
use App\Models\TimeModel;
use App\Mail\AssembleMail;
use App\Models\PriceModel;
use Illuminate\Http\Request;
use App\Mail\AppointmentMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $data['assemblyPrice']=PriceModel::where('price_status',0)->first();
        $data['mountingPrice']=PriceModel::where('price_status',1)->first();
        $data['tvselectionPrice']=PriceModel::where('price_status',2)->first();
        $data['assemblyClientReview']=Client::get();
        // $data['generalClientReview']=Client::where('assembly_mounting_tv',1)->get();
        // $data['selectionClientReview']=Client::where('assembly_mounting_tv',2)->get();
        $data['profile_image']=User::where('status',0)->first();
        $data['galleries_images']=Gallery::get();
        return view('frontend.index', $data);
    }
    public function getdate($getdate){
        $getdate;
        $parsedDate = Carbon::parse($getdate);
        $getdata=DateModel::where('date','=',$getdate)->first();
        $getrecordtime=TimeModel::where('tv_date_id','=',!empty($getdata) ? $getdata->id:'')->get();
        $formattedDate= $parsedDate->format('l, F j');
        return response()->json([
            "status"=>true,
            "success"=>view("frontend._list",[
                'formattedDate'=>$formattedDate,
                'getrecordtime'=>$getrecordtime,
            ])->render(),

          ],200);
    }
    public function appointment_form(Request $request){
        $date = Carbon::now();
        $current_date=$date->format('d-m-Y');
        $getdate=DateModel::where('date','=',$current_date)->first();
        $data['getrecordtime']=TimeModel::where('tv_date_id','=',!empty($getdate) ? $getdate->id:'')->get();
        $data['formattedDate'] = $date->format('l, F j');
        $data['generalMounting']=$request->generalMounting;
        $data['name']=$request->name;
        $data['last_name']=$request->last_name;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['mounting']=$request->mounting;
        $data['tv_size']=$request->tv_size;
        $data['many_tv']=$request->many_tv;
        $data['wall']=$request->wall;
        $data['around_to_help']=$request->around_to_help;
        $data['cords']=$request->cords;
        $data['mount_for_the_TV']=$request->mount_for_the_TV;
        $data['more_information']=$request->more_information;
        $data['status']=$request->status;
        $data['profile_image']=User::where('status',0)->first();
        return view('frontend.appointment_form',$data);
    }
    public function appointment_email(Request $request){
        $details = $request->all();
        Mail::to('nasarkhan2206@gmail.com')->send(new AppointmentMail($details));
        return redirect()->back()->with('success', 'Success! Email Sent Successfully');
    }
    public function assembly_appointment_store(Request $request){
        $details = $request->all();
        Mail::to('nasarkhan2206@gmail.com')->send(new AssembleMail ($details));
        return redirect()->back()->with('success', 'Success! Email Sent Successfully');
    }
    public function help_form_view()
    {
        $data['profile_image']=User::where('status',0)->first();
        return view('frontend.help',$data);
    }
    public function contact_store(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
        ]);
            $contact=Contact::create($request->all());
            $contact->save();
            return redirect()->back()->with('success','Message sent successfuly');
    }
}
