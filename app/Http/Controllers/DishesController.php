<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DishesController extends Controller
{
	public function getRemoteData()
	{
		$client = new Client([
			'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json'],
		]);

		$response = $client->request('GET', 'https://sender.net/meals/');
		$data = $response->getBody();
		$data = json_decode($data);
		$days = $data->feed->days;
		return compact ('days');
	}

	public function showDays()
	{
		return view ('dishes', $this->getRemoteData());
	}

	    public function monday()
    {
    	$days = $this->getRemoteData();
    	foreach($days as $day){
    			$soups = $day->monday->meals->soups;
    			$mains = $day->monday->meals->mainDishes;
    			$salads = $day->monday->meals->salads;
    			$sides = $day->monday->meals->sideDishes->dishes;
    	}
        return view('single_day', ['soups' => $soups,'mains' => $mains,'salads' => $salads,'sides' => $sides]);
    }

    	    public function tuesday()
    {
    	$days = $this->getRemoteData();
    	foreach($days as $day){
    			$soups = $day->tuesday->meals->soups;
    			$mains = $day->tuesday->meals->mainDishes;
    			$salads = $day->tuesday->meals->salads;
    			$sides = $day->tuesday->meals->sideDishes->dishes;
    	}
    	
        return view('single_day', ['soups' => $soups,'mains' => $mains,'salads' => $salads,'sides' => $sides]);
    }

        	    public function wednesday()
    {
    	$days = $this->getRemoteData();
    	foreach($days as $day){
    			$soups = $day->wednesday->meals->soups;
    			$mains = $day->wednesday->meals->mainDishes;
    			$salads = $day->wednesday->meals->salads;
    			$sides = $day->wednesday->meals->sideDishes->dishes;
    	}
    	
        return view('single_day', ['soups' => $soups,'mains' => $mains,'salads' => $salads,'sides' => $sides]);
    }

        	    public function thursday()
    {
    	$days = $this->getRemoteData();
    	foreach($days as $day){
    			$soups = $day->thursday->meals->soups;
    			$mains = $day->thursday->meals->mainDishes;
    			$salads = $day->thursday->meals->salads;
    			$sides = $day->thursday->meals->sideDishes->dishes;
    	}
    	
        return view('single_day', ['soups' => $soups,'mains' => $mains,'salads' => $salads,'sides' => $sides]);
    }

        	    public function friday()
    {
    	$days = $this->getRemoteData();
    	foreach($days as $day){
    			$soups = $day->friday->meals->soups;
    			$mains = $day->friday->meals->mainDishes;
    			$salads = $day->friday->meals->salads;
    			$sides = $day->friday->meals->sideDishes->dishes;
    	}
    	
        return view('single_day', ['soups' => $soups,'mains' => $mains,'salads' => $salads,'sides' => $sides]);
    }
}
