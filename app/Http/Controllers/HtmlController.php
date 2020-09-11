<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\person;

class HtmlController extends Controller
{
    public function home(){
        return view("html.home");
    }

    public function about(){
        return view("html.about");
    }

    public function call(){
        return view("html.call");
    }

    public function client(){
        return view("html.client");
    }

    public function service(){
        return view("html.service");
    }

    public function book(){
        return view("html.book");
    }

    public function savebook(Request $request){
        // dd($request->all());  
        $save_form = person::create([
            'firstname'          => $request->firstname,
            'lastname'          => $request->lastname,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'subject'          => $request->subject,
            'message'          => $request->message,
             
        ]);   
       // dd($save_form);

        if($save_form){
            return redirect()->back()->with([
              'message'  => 'form has been saved..!',
              'alertType' => 'success',
            ]);
          }else{
            return redirect()->back()->with([
              'message'  => 'Record not found!',
              'alertType' => 'error',
            ]);
          } 
    }
    
    
}
