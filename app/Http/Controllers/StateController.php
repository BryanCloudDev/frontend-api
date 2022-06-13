<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StateController extends Controller
{
    public function index($id){
        $state = Http::get("http://127.0.0.1:8000/api/population/$id");
        return view("state_update",[
            "state" => $state->object()
        ]);
    }

    public function update(Request $request,$id){
        $request->validate([
            "states" => "string",
            "total_population" => "string",
            "vaccinated_population" => "string",
            "unvaccinated_population" => "string",
        ]);
        $response = Http::put("http://127.0.0.1:8000/api/population/$id", $request->all());
        if($response->status() == 202){
            return redirect("/")->with("message","Population updated succesfully");
        }
    }
}
