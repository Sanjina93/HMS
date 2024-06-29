<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Services;
use App\Models\Detail;
use App\Models\News;
use App\Models\Feedback;


class HomeController extends Controller
{



    public function redirect(){
        if (Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor = doctor::all();




                return view('user.home',compact('doctor'));
            }
            else{
                $total_doctor=doctor::all()->count();
                $total_appointment=appointment::all()->count();

                $total_approved=appointment::where('status', '=', 'approved')->get()->count();
                return view('admin.home',compact('total_doctor','total_appointment','total_approved'));
            }

        }
        else{
            return redirect()->back();
        }
    }

    public function index(Request $request){
        if(Auth::id()){
            return redirect ('home');
        }
        else{
            $doctor=doctor::all();
            $test=News::all();
            $news = null;
            if ($request->has('id')) {
                $news = News::find($request->query('id'));
            }
            return view('user.home',compact('doctor','test','news'));

    }
}


    public function aboutus(){
        $doctor=doctor::all();
        return view('user.about',compact('doctor'));
    }

    public function aservices(){
        $services=Services::all();
        $detail=detail::all();
        return view('user.services',compact('services','detail'));

    }


    public function details($id){
        $detail= detail::find($id);

        return view('user.details',compact('detail'));
    }
    public function doctors(){
        $doctor=doctor::all();

        return view('user.doctornav',compact('doctor'));
    }

    public function contacts(Request $request){
        return view('user.contact');
    }

    public function contact(Request $request){


        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ];


        $messages = [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'subject.required' => 'The subject field is required.',
            'message.required'=>'The message field is required.',
            'message.string' => 'The message must be a string.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
            $contact= new Contact;
            $contact->name=$request->name;
            $contact->email=$request->email;
            $contact->subject=$request->subject;
            $contact->message=$request->message;
            $contact->save();

            return redirect()->back() ->with('message','Thank you for your time.We will contact soon.');



    }
    public function footer(){
        return view('user.footer');
    }

    public function feedback(Request $request){


        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:10',
            'message' => 'required|string'
        ];


        $messages = [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'number.required' => 'The number field is required.',
            'message.required'=>'The message field is required.',
            'message.string' => 'The message must be a string.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
            $feedback= new feedback;
            $feedback->name=$request->name;
            $feedback->email=$request->email;
            $feedback->number=$request->number;
            $feedback->message=$request->message;
            $feedback->save();

            return redirect()->back() ->with('message','Thank you for your time.');



    }


    public function appointment(Request $request){

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age'=>'required|string',
            'gender'=>'required|string',
            'date' => 'required|date',
            'phone' => 'required|int|min:10',
            'message' => 'nullable|string',
            'doctor' => 'required'
        ];


        $messages = [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.required' => 'The email must be a valid email address.',
            'age.required'=>'The age field is required',
            'gender.required'=>'The age is required',
            'date.required' => 'The date field is required.',
            'phone.required' => 'The phone field is required.',
            'doctor.required' => 'The doctor field is required.',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data= new Appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->age=$request->age;
        $data->gender=$request->gender;
        $data->date=$request->date;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';
        if(Auth::id()){

            $data->user_id=Auth::user()->id;
            }


        $data->save();

        return redirect()->back() ->with('message','Appointment Request Successful.We will contact soon.');

    }

    public function myappointment(){
        if (Auth::id())
        {
            if(Auth::user()->usertype==0){
                $userid=Auth::user()->id;
                $appointment=appointment::where('user_id', $userid)->get();
            return view('user.myappointment',compact('appointment'));

            }


        else{
            return redirect()->back();
        }
    }
        else{
            return redirect('login');
        }
    }


        public function cancelappointment($id){
            $data=appointment::find($id);
            $data->delete();
            return redirect()-> back();



    }

    public function profile($id){
        $doctor=Doctor::find($id);
        return view ('user.profile',compact('doctor'));
    }
    public function latestnews(){
        $test=News::all();
        return view('user.latestnews',compact('test'));
    }

    public function usernews($id){
        if (Auth::check()) {
            return redirect('home');
        } else {
            $doctors = Doctor::all();
            $new = News::find($id);
        }


            return view('user.usernews', compact('doctors', 'new'));

    }




}
