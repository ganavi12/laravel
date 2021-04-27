<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Session;
use App\SignUp_model;
use DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        $login = $request->input();
        $current_date = date('Y-m-d H:i:s');
        $login['session_exp'] = date('Y-m-d H:i:s', strtotime("+5 sec"));
        session()->put('session_data', $login);
        $get_session = session()->get('session_data');

        if ($get_session['session_exp'] <= $current_date) {
            echo "expired";
        }

        try {
            $validate = DB::table('signup')->where('email', '=', $login['email'])->get();
            $login_data = $validate->map(function ($obj) {
                return (array) $obj;
            })->toArray();

            if (!empty($login_data)) {
                $custom_response['status_code'] = 200;
                $custom_response['status_message'] = 'Login Successfully';
                return response(json_encode($custom_response), 200);

            } else {
                $custom_response['status_code'] = 200;
                $custom_response['status_message'] = 'Invalid login';
                return response(json_encode($custom_response), 500);
            }
        } catch (Exception $e) {
            $custom_response['status_code'] = 500;
            $custom_response['status_message'] = $this->lang->line('text_rest_act_api_fail');
            return response(json_encode($custom_response), 500);
        }
    }

    public function SignUp(Request $request)
    {
        $data = $request->input();
        try {
            $users = DB::table('signup')->where('email', '=', $data['email'])->orwhere('mobile', '=', $data['mobile'])->get();
            $array = $users->map(function ($obj) {
                return (array) $obj;
            })->toArray();

            if (!empty($array)) {
                /* for ($i = 0 ; $i<sizeof($array); $i++){
                $email = $array[$i]['email'];
                $mobile = $array[$i]['mobile'];
                }
                if(count($email) > 0 || count($mobile) > 0){
                echo "duplicate entry";
                }else{
                echo "valid";
                } */
                $custom_response['status_code'] = 200;
                $custom_response['status_message'] = 'Success';
                $custom_response['message'] = 'email and mobileno exist . Kindly use different mail or mobile number';
                return response(json_encode($custom_response), 200);
            } else {
                $SignUp = new SignUp_model;
                $SignUp->name = $data['name'];
                $SignUp->mobile = $data['mobile'];
                $SignUp->email = $data['email'];
                $SignUp->password = $data['password'];
                $SignUp->save();

                $custom_response['status_code'] = 200;
                $custom_response['status_message'] = 'Success';
                return response(json_encode($custom_response), 200);
            }
        } catch (Exception $e) {
            $custom_response['status_code'] = 500;
            $custom_response['status_message'] = $this->lang->line('text_rest_act_api_fail');
            return response(json_encode($custom_response), 500);
        }
    }
}