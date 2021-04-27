<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function getdata($data){
        return $data;
    }

    public function showdata(){
        return "no data";
    }

    public function pagecontact(){
        return view('contact');
    }

    public function show_contact($id,$name){
        return view('show',compact('id','name'));
    }
}
