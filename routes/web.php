<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//use Illuminate\Http\Support\Facade\Route;

Route::get('/', function () {
    return view('index');
}); 

Route::get('id/{id}/',function($id){
    return "value is $id";
});

//without param
Route::get('/pass','test@showdata');

//with param
Route::get('/{string}','test@getdata')->name('string');


//index method

Route::get('ind/hi','Usercontroller@index');

Route::get('/register/form',function(){
   return  view('register');

});
Route::post('/register/1',array('uses'=>'Usercontroller@registerPost'));


Route::get('/set/Cookie','CookieController@setCookie');

Route::get('/get/Cookie','CookieController@getCookie');

Route::resource('/Res/test','Usercontroller');

Route::get('/post/cont','test@pagecontact');

Route::get('/a/{id}/{name}','test@show_contact');


//another way of route path
//Route::view('url/{id}','sample');

Route::get('sample/{id}',function($id){
    echo $id;
    return view('sample');
});

Route::get('/user/index','Users@index');

Route::get('user/show/{id}','Users@show');

Route::view('user/login','user'); 
Route::post('user/usercontroller','Userscontroller@account');
Route::get('user/loop','Userscontroller@loop');

Route::view('/','noaccess');


//login

Route::view('login/user','login');
Route::post('login/Login','LoginController@Login');
Route::view('login/welcome','signup');
Route::post('login/SignUp','LoginController@SignUp');