<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentMail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Services;
use App\Models\Detail;
use App\Models\News;
use Illuminate\Support\Facades\Notification;

use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Mail;

class Admincontroller extends Controller
{
    public function addview(){
        if(Auth::id())
        {
            if(Auth::user()->usertype==1){
                return view('admin.add_doctor');

            }
            else{
                return redirect()->back();

            }
        }
        else{
                return redirect('login');
            }
        }



    public function upload(Request $request)
    {
        $doctor=new Doctor;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        $doctor->days=$request->days;
        $doctor->availability=$request->availability;
        $doctor->save();

        return redirect()->back()->with('message','Doctor added Successfully');





    }

    public function showappointment(){
        if(Auth::id())
        {
        if(Auth::user()->usertype==1){
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
        }
         else{
            return redirect()->back();

        }
    }
            else{
                return redirect('login');
            }
    }

    public function approved($id){
        $data=appointment::find($id);
        $data->status='approved';
        $data->save();

        return redirect()->back();

    }

    public function cancelled($id){
        $data=appointment::find($id);
        $data->status='cancelled';
        $data->save();
        return redirect()->back();
    }

    public function viewemail($id){
        $data=Appointment::find($id);
        return view('admin.viewemail',compact('data'));
    }

    public function sendemail(Request $request ,$id){
        $data=Appointment::find($id);
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,

            'heading' => $request->heading,
            'endpart' => $request->endpart
        ];

        Mail::to($data['email'])->send(new AppointmentMail($details));
        // Notification::send($data, new SendEmailNotification($details));
        return redirect()->back();

    }

    public function showdoctor(){
        $data=doctor::all();
        return view('admin.showdoctor',compact('data'));
    }

    public function delete($id){
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function updatedoctor($id){
        $data=doctor::find($id);
        return view('admin.updatedoctor',compact('data'));
    }
    public function editdoctor(Request $request , $id){
        $doctor=doctor::find($id);
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        $doctor->days=$request->days;
        $doctor->availability=$request->availability;
        $doctor->save();

        return redirect()->back()->with('message','Doctor updated Successfully');



    }

    public function services(){
        if(Auth::id())
        {
            if(Auth::user()->usertype==1){
                return view('admin.services');

            }
            else{
                return redirect()->back();

            }
        }
        else{
                return redirect('login');
            }
        }



    public function service(Request $request){

        $services= new Services;



        $services->service=$request->service;

        $services->save();
        return redirect()->back()->with('message','services added Successfully');;
    }
    public function detail(){
        if(Auth::id())
        {
            if(Auth::user()->usertype==1){
                return view('admin.details');

            }
            else{
                return redirect()->back();

            }
        }
        else{
                return redirect('login');
            }
        }



    public function upload_details(Request $request){

      $detail = new detail;
      $image=$request->image;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('doctorimage/',$imagename);
      $detail->image=$imagename;

        $detail->description=$request->description;

        $detail->save();
        return redirect()->back()->with('message','Detail added Successfully');;



    }

    public function showdetails(){
        $detail=detail::all();
        return view('admin.show_details',compact('detail'));
    }

    public function deletedetail($id){
        $detail=detail::find($id);
        $detail->delete();
        return redirect()->back();

    }

    public function updatedetail($id){
        $detail=detail::find($id);
        return view('admin.updatedetail',compact('detail'));
    }
    public function editdetail(Request $request , $id){
        $detail=detail::find($id);
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('doctorimage',$imagename);
        $detail->image=$imagename;

        $detail->description=$request->description;

        $detail->save();

        return redirect()->back()->with('message','Detail updated Successfully');



    }

    public function news(){
        if(Auth::id())
        {
            if(Auth::user()->usertype==1){
                return view('admin.news');

            }
            else{
                return redirect()->back();

            }
        }
        else{
                return redirect('login');
            }
    }



    public function new(Request $request){
        $news = new news;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('doctorimage/',$imagename);
        $news->image=$imagename;



        $news->image=$imagename;
        $news->title=$request->title;
        $news->description=$request->description;
        $news->name=$request->name;
        $news->time=$request->time;


        $news->save();
        return redirect()->back()->with('message','News Added Successfully');
    }

    public function shownews(){
        $data=News::all();
        return view('admin.shownews',compact('data'));
    }
    public function updatenews($id){
        $news=news::find($id);
        return view('admin.updatenews',compact('news'));
    }
    public function editnews(Request $request , $id){
        $news=news::find($id);
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $news->image=$imagename;

        $news->description=$request->description;
        $news->title=$request->title;
        $news->time=$request->time;
        $news->name=$request->name;

        $news->save();

        return redirect()->back()->with('message','news updated Successfully');



    }
    public function deletenews($id){
        $news=news::find($id);
        $news->delete();
        return redirect()->back();

    }

}

