<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TypeDocumentController extends Controller
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

        $typeDocuments = $this->fetchDataFromApi($url . '/typeDocuments');

        return $typeDocuments;

        // return view('typeDocument.index', compact('typeDocuments'));
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

        $typeDocument = $this->fetchDataFromApi($url . '/typeDocuments/' . $id);

        return $typeDocument;

        // return view('categories.show', compact('typeDocument'));
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
