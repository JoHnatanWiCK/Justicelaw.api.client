<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReviewController extends Controller
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

        $reviews = $this->fetchDataFromApi($url . '/reviews');

        return $reviews;

        // return view('categories.index', compact('forumCategory'));
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

        $reviews = $this->fetchDataFromApi($url . '/reviews/' . $id);

        return $reviews;
        
        // return view('categories.show', compact('forumCategory'));
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