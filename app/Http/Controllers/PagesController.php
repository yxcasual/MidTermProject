<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function contact(){
        return view('pages.contact');
    }

    function save(Request $request){
        $name= $request->name;
        //echo("Thank you $name for contacting us.");
        return redirect()->route('thanks',['name'=> $name ]);
    }
    function thanks($name ,Request $request ){
        return view('pages.contactformresponse')->with(compact('name'));
    }

}
