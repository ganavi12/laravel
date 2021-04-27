<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userscontroller extends Controller
{
    public function account(Request $request){
        $request->validate(['adress'=> 'required',
                            'city' =>'required'
                            ]);
        echo $request->path().PHP_EOL;
        echo $request->url().PHP_EOL;
        echo $request->method().PHP_EOL;
        echo $request->method('email').PHP_EOL;
        return $request->input();
    }

    public function loop(){
        $info = array('name'=>'ganavi','empid'=>'23660','age'=>'25');
       //$info = ['name'=>'ganavi','empid'=>'23660','age'=>'25'];
        return view('loop',['data'=>$info]);
    }
}
