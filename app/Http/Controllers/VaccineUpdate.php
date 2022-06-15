<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VaccineUpdate extends Controller
{
    function index(){
        return view('create_vaccine');
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
            return redirect("/vaccines")->with('response', 'Vaccine succesfully updated!');
        }
    }
    public function destroy(Request $data){
        $data->validate(['id' => 'numeric']);
        Http::delete("http://127.0.0.1:8000/api/vaccines/{$data->id}");
        return redirect('vaccines')->with('response', 'Vaccine succesfully deleted!');
    }
}
