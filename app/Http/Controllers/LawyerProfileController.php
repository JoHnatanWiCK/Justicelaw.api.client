<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LawyerProfileController extends Controller
{

    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json(); 
    }

    public function index()   //http://api.codersfree.test/v1/categories?included=posts
    {

        $url = env('URL_SERVER_API');

        $lawyerProfiles = $this->fetchDataFromApi($url . '/lawyerPofiles?included=post');
 
        return $lawyerProfiles;

        return view('lawyerProfiles.index', compact('lawyerProfiles'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $lawyerProfile = $this->fetchDataFromApi($url . '/lawyerProfile/' . $id);

        return view('lawyerProfiles.show', compact('lawyerProfile'));
    }
}
