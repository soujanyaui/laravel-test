<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send(){
        Mail::send(['text'=>'mail'],['name'=>'soujanya'],function($message){

         $message->to('javvaji.soujanya4@gmail.com','To soujanya')->subject('test email');
            $message->from('javvaji.soujanya4@gmail.com','soujanya');
        });

    }
}
