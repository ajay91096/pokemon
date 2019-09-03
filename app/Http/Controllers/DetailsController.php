<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Input;
use Ixudra\Curl\Facades\Curl;

class DetailsController extends Controller
{
    public function index(Request $request, $name) 
    {
        try {
     		$api = "https://pokeapi.co/api/v2/pokemon/".$name;
       	    $response = Curl::to($api)->get();
     		$result = json_decode($response);
     		return view('details')->with('result', $result);
        } catch (Exception $e) {
            echo $e;
        }
    }
}
