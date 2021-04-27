<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
class SignUp_model extends Eloquent 
{
    protected $table = 'signup';
    public $timestamps = true;
    
    //protected  $connection = 'mysql';
    //protected $TABLENAME = 'signup';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'mobile','email', 'password',
    ];
    n
    public static function getDyamicmodel(){
        echo "111";
    }
}