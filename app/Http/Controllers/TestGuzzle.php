<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestGuzzle extends Controller
{
    //

    public function getApiGuzzle(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
        return $response->getBody();
    }
}
