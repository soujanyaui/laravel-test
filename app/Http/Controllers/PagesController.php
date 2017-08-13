<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.home');
    }
    public function getAbout(){
        return view('pages.about');
    }
    public function getContact(){

        $tasks = [
           'go to costco',
           'check my eye site',
           'get new glasses'

        ];

        return view('pages.contact',compact('tasks'));


    }

}
