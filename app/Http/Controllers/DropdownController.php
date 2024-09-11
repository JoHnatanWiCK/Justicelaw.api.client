<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DropdownController extends Controller
{

    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    /**
     * Display a listing of the resource.
     */
    public function indexCity()
    {
        $url = env('URL_SERVER_API');

        $cities = $this->fetchDataFromApi($url . '/cities');

        return $cities;

        // return view('city.index', compact('cities'));

    }

    public function indexState()
    {
        $url = env('URL_SERVER_API');

        $states = $this->fetchDataFromApi($url . '/states');

        return $states;

        // return view('state.index', compact('states'));

    }

    public function indexCountry()
    {
        $url = env('URL_SERVER_API');

        $countries = $this->fetchDataFromApi($url . '/countries');

        return $countries;

        // return view('country.index', compact('countries'));

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
    public function showCountry(string $id)
    {
        $url = env('URL_SERVER_API');

        $country = $this->fetchDataFromApi($url. '/countries/'. $id);

        return $country;

        // return view('country.show', compact('country'));
    }

    public function showState(string $id){
        $url = env('URL_SERVER_API');

        $state = $this->fetchDataFromApi($url. '/states/'. $id);

        return $state;

        // return view('state.show', compact('state'));
    }

    public function showCity(string $id){
        $url = env('URL_SERVER_API');

        $city = $this->fetchDataFromApi($url. '/cities/'. $id);

        return $city;

        // return view('city.show', compact('city'));
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
