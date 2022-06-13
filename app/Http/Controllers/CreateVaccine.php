<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CreateVaccine extends Controller
{
    function index(){
        return view('create_vaccine');
    }
    public function register(Request $data){
        $data->validate([
            'name' => 'string|max:20|required|min:5',
            'email' => 'email|required|max:255',
            'password' => 'required|alpha_num|max:30|min:8',
        ]);

        $response = Http::asForm()->post('http://127.0.0.1:8000/api/register',[
            'name' => $data->name,
            'email' => $data->email,
            'password' => $data->password
        ]);

        $response = json_decode($response,true);

        if(isset($response['access_token'])){
            return view('signin');
        }
        else{
            return view('signup');
        }
    }
}
