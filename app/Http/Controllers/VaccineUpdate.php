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

    public function store($id){
        $vaccine = Http::get("http://127.0.0.1:8000/api/vaccines/$id");
        return view("vaccine_update",[
            "vaccine" => $vaccine->object()
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            "vaccine_name" => "min:2|string",
            "available_quantity" => "min:2|string",
            "vaccine_type" => "min:2|string",
            "vaccine_creator" => "min:2|string",
        ]);
        $response = Http::put("http://127.0.0.1:8000/api/vaccines/$id",$request->all());
        if($response->status() == 202){
            return redirect("/");
        }
    }
}
