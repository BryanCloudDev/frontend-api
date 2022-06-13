<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VaccineUpdate extends Controller
{
    function index(){
        return view('create_vaccine');
    }

    function register(Request $data){
        $data->validate([
            'vaccineName' => 'required|alpha_num|max:20|min:5',
            'availableQuantity' => 'required|numeric',
            'vaccineType' => 'required|alpha_num|max:20|min:5',
            'vaccineCreator' => 'required|string|max:20|min:5'
        ]);

        $response = Http::asForm()->post('http://127.0.0.1:8000/api/vaccines',[
            'vaccine_name' => $data->vaccineName,
            'available_quantity' => $data->availableQuantity,
            'vaccine_type' => $data->vaccineType,
            'vaccine_creator' => $data->vaccineCreator
        ]);
        
        return redirect('/');
    }
}
