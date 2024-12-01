<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DateController extends Controller
{

    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = env('URL_SERVER_API');
    
        // Obtener los datos desde la API
        $dates = $this->fetchDataFromApi($url . '/dates');
        $consultings = $this->fetchDataFromApi($url . '/consultings');
    
        // Ordenar $dates según el campo startTime
        usort($dates, function ($a, $b) {
            return strtotime($a['startTime']) <=> strtotime($b['startTime']);
        });
    
        // Retornar la vista con los datos organizados
        return view('calendar.calendar_lawyer', compact('dates', 'consultings'));
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

        $dates = $this->fetchDataFromApi($url . '/dates/' . $id);

        return $dates;

        // return view('dates.show', compact('dates'));
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
