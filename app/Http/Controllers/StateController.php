<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StateController extends Controller
{
    public function store($id){
        $state = Http::get("http://127.0.0.1:8000/api/population/$id");
        return view("state_update",[
            "state" => $state->object()
        ]);
    }

<<<<<<< HEAD
=======
    public function update(Request $request,$id){
        $request->validate([
            "states" => "min:2|string",
            "total_population" => "min:2|string",
            "vaccinated_population" => "min:2|string",
            "unvaccinated_population" => "min:2|string",
        ]);
        $response = Http::put("http://127.0.0.1:8000/api/population/$id", $request->all());
        if($response->status() == 202){
            return redirect("states")->with("message","Population updated succesfully");
        }
    }

>>>>>>> 2755d5e68f97769251d6440221638a68168586c7
    public function states(Request $request){
        $states = Http::get("http://127.0.0.1:8000/api/population/states/{$request->city}");
        if($states->status() == 200){
            $populations = $states->object();
            return redirect("states")->with(compact("populations"));
        }
    }
}
