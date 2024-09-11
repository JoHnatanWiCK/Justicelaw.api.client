<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class VerificationLawyerController extends Controller
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

        $verificationLawyers = $this->fetchDataFromApi($url . '/verificationLawyers?included=post');
 
        return $verificationLawyers;

        return view('verificationLawyers.index', compact('verificationLawyers'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $verificationLawyer = $this->fetchDataFromApi($url . '/verificationLawyer/' . $id);

        return view('verificationLawyers.show', compact('verificationLawyer'));
    }
}
