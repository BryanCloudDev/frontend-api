<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index(){
        $populations = Http::get("http://127.0.0.1:8000/api/populations");
        $vaccines = Http::get("http://127.0.0.1:8000/api/vaccines");
        return view("index",[
            "populations" => $populations->object(),
            "vaccines" => $vaccines->object(),
        ]);
    }
}
