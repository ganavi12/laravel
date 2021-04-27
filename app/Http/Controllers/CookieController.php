<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CookieController extends Controller
{
    public function setCookie(){
        $min = 1;
        //print_r($input);
        $response = new Response('hello, test cookie');
        //$response =new Response($request);
        $response->withCookie(cookie('name','test',$min));
        return $response;

    }

    public function getCookie(Request $request){
        return $request->cookie('name');

    }
}
