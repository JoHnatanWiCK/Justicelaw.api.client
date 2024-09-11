<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LawyerController extends Controller
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

        $lawyers = $this->fetchDataFromApi($url . '/lawyers?included=post');
 
        return $lawyers;

        return view('lawyers.index', compact('lawyers'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $lawyer = $this->fetchDataFromApi($url . '/lawyer/' . $id);

        return view('lawyers.show', compact('lawyer'));
    }
}
