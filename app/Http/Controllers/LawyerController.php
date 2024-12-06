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

    public function index()
    {
        $url = env('URL_SERVER_API');

        $lawyers = $this->fetchDataFromApi($url . '/lawyers');

        return $lawyers;

        // return view('lawyers.index', compact('lawyers'));
    }


    public function indexva()
    {
        $url = env('URL_SERVER_API');


        $lawyers = $this->fetchDataFromApi($url . '/lawyers');

        $lawyerPofiles = $this->fetchDataFromApi($url . '/lawyerPofiles');
        
        return view('va.verificarabogado',compact('lawyers','lawyerPofiles'));

        // return view('lawyers.index', compact('lawyers'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $url = env('URL_SERVER_API');

        $lawyer = $this->fetchDataFromApi($url . '/lawyers/' . $id);

        return $lawyer;

        // return view('notifications.show', compact('notification'));
    }

    public function showva(string $id)
    {
        $url = env('URL_SERVER_API');

        $lawyere = $this->fetchDataFromApi($url . '/lawyers/' . $id);

        $lawyers = $this->fetchDataFromApi($url . '/lawyers');

        return view('va.verificarshow',compact('lawyere','lawyers')) ;

        // return view('notifications.show', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
