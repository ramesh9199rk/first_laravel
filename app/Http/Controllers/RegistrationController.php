<?php

namespace App\Http\Controllers;
use App\Http\Request\Registration;
use Illuminate\Http\Request;
use App\Models\student;

class RegistrationController extends Controller
{
    //
    public function index()
    {
        return view('dynamicForm');
        //return view ('form');
    }
 public function register(Request $request){
  $request->validate(
    ['name' => 'required',
    'email' => 'required |  email',
     'password'=>'required',
     'cpassword' => 'required |same:password',
    ]
  );
  echo "<pre>";
   print_r($request->all());
 }
 public function dyregister(Request $request){
  $request->validate(
    ['name' => 'required',
    'email' => 'required |  email',
     'password'=>'required',
     'cpassword' => 'required |same:password',
    ]
  );
  //  echo "<pre>";
  //  print_r($request->all());
   $student=new student();
   $student->name=$request['name'];
   $student->email=$request['email'];
   $student->password=md5($request['password']);
   $student->city=$request['city'];
   //$student->gender=$request['gender'];
   $student->save();
   return redirect('student/detail');
 }
 public function detail(){
  $student = student::all();
  //echo "<pre>";
  //print_r($student->toArray());
  //die();
  $data=compact('student');
  return view('detail')->with($data);
 }
}