<?php

namespace App\Http\Controllers;


use App\forums;
use Redirect;
use Illuminate\Http\Request;

class send extends Controller
{
     function send(Request $req){
     	$email = $req->input('email');
     	$name = $req->input('name');
     	$subject = $req->input('subject');
     	$message = $req->input('message');

     	if($message == ''){
     		$message = 'NA';
     	}


$data = array('email' =>$email ,'name' =>$name ,'subject' =>$subject ,'message' =>$message);

        forums::insert($data);



        return view('index')->with('success','We have received your query and will get back to you soon via email!');

     }

}
