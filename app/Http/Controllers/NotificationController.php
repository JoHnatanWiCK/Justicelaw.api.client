<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NotificationController extends Controller
{
    private function fetchDataFromApi($url)
{
    try {
        $response = Http::get($url);

        // Verificar si la respuesta fue exitosa
        if ($response->successful()) {
            return $response->json();
        } else {
            // Manejar errores si la respuesta no es exitosa
            throw new \Exception('Error en la API: ' . $response->status());
        }
    } catch (\Exception $e) {
        // Manejar excepciones
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = env('URL_SERVER_API');

        $notifications = $this->fetchDataFromApi($url . '/notifications');

        

        return view('notification.notification');
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

        $notification = $this->fetchDataFromApi($url . '/notifications/' . $id);

        return $notification;

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
        $url = env('URL_SERVER_API');

        $notification = $this->fetchDataFromApi($url . '/notifications/' . $id);

        return view('notifications', compact('{id}'));
    }
}
