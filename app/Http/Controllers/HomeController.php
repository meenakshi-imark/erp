<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Backend\Mails\AdminAddCompany;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		 $data = array('name'=>"Virat Gandhi");
      Mail::send('mails.adduser', $data, function($message) {
         $message->to('nanta1811@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "HTML Email Sent. Check your inbox.";
	  exit();
		Mail::send(new AdminAddCompany()); 
        return view('home');
    }
}
