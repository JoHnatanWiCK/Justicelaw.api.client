<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Disponibilidad; // Asegúrate de tener el modelo correspondiente

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
     * Store the newly created availability in storage.
     */
    public function storeAvailability(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'date' => 'required|date',
            'startTime' => 'required|string',
            'endTime' => 'required|string',
            'state' => 'required|string',
            'lawyer_id' => 'required|integer',
            'notification_time' => 'required|integer'
        ]);

        // Crear la disponibilidad en la base de datos
        Disponibilidad::create([
            'date' => $request->date,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'state' => $request->state,
            'lawyer_id' => $request->lawyer_id,
            'notification_time' => $request->notification_time,
        ]);

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->back()->with('success', 'Disponibilidad guardada con éxito');
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
