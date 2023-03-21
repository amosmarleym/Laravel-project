<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class Goodcontroller extends Controller
{
    public function index()
    {
   $messages = Message::all();
   foreach($messages as message)
   echo $message->title;

}die;
     return view('Home');
     

}

