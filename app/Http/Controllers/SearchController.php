<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class SearchController extends Controller
{
    public function index(Request $request) 
    { 
        try {
            $search = $request->input('search');
            if ($search) {
                $api = "https://pokeapi.co/api/v2/pokemon/".$search;
                $response = Curl::to($api)->get();

                if ($response == "Not Found") {
                    return view('error');
                } else {
                    $result = json_decode($response);
                    return view('result')->with('result', $result)->with('api', $api);
                }
            } else {
                return "Please provide name of pokemon";
            }
        } catch (Exception $e) {
            echo $e; 
        }
    }
}
