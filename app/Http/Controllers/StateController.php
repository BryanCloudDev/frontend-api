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

    public function states(Request $request){
        $states = Http::get("http://127.0.0.1:8000/api/population/states/{$request->city}");
        if($states->status() == 200){
            $populations = $states->object();
            return redirect("/")->with(compact("populations"));
        }
    }
}
