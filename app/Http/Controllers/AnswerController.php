<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnswerController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = env('URL_SERVER_API');

        $answer = $this->fetchDataFromApi($url . '/answers');

        return $answer;

        // return view('categories.index', compact('answer'));
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
        $validatedData = $request->validate([
            'content' => 'required|string|max:255',
            'lawyer_id' => 'required|integer',
            'question_id' => 'required|integer',
            'date_publication' => 'required|date',


        ]);
        $validatedData['date_publication'] = Carbon::parse($validatedData['date_publication'])->toDateString();


        // Enviar los datos a la API usando Http::post
        $response = Http::post('https://apijusticelaw-production.up.railway.app/v1/anwers', [
            'content' => $validatedData['content'],
            'lawyer_id' => $validatedData['lawyer_id'],

            'question_id' => $validatedData['question_id'],
+            'date_publication' => $validatedData['date_publication']

        ]);           

        // Manejar la respuesta de la API
        if ($response->successful()) {
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Pregunta creada exitosamente');
        } else {
            // Manejar el error (puedes personalizar este mensaje)
            return redirect()->back()->withErrors(['message' => 'Error al crear la pregunta']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $url = env('URL_SERVER_API');

        $answer = $this->fetchDataFromApi($url . '/answers/' . $id);

        return $answer;
        
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