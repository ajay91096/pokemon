<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Ixudra\Curl\Facades\Curl;

class HomeController extends Controller
{
    public function index(Request $request) 
    {
        try {
          	$dayOfYear = today()->dayOfYear;
          	$rand = rand(0,800);

          	if ($dayOfYear != $request->cookie('dayofyear')) {	
        		$api = "https://pokeapi.co/api/v2/pokemon/".$rand;
      	    	$result = Curl::to($api)->get();
      	    	$json = json_decode($result);	
      	    	$response = new Response(view('search')->with('pokemon', $json));
      	    	$response->withCookie(cookie()->forever('dayofyear', $dayOfYear));
      	    	$response->withCookie(cookie()->forever('random', $rand));
          	} else {
      			$api = "https://pokeapi.co/api/v2/pokemon/".$request->cookie('random');
      	    	$result = Curl::to($api)->get();
      	    	$json =  json_decode($result);	
      	    	$response = new Response(view('search')->with('pokemon', $json));
          	}
        	return $response;
        } catch (Exception $e) {
            echo $e;
        }
    }
}
