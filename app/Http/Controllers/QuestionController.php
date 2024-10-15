<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
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
        $questions = $this->fetchDataFromApi($url . '/questions');
        $answers =  $this->fetchDataFromApi($url . '/answers');
        // Suponiendo que $questions es un array, deberías convertirlo a una colección
        $questions = collect($questions);
        $answers = collect($answers);

        // Paginamos la colección, 10 elementos por página
        $perPage = 5; // Número de elementos por página
        $currentPage = request()->input('page', 1); // Obtenemos la página actual
        $pagedData = $questions->forPage($currentPage, $perPage); // Dividimos los datos
    
        $pquestions = new \Illuminate\Pagination\LengthAwarePaginator(
            $pagedData,
            $questions->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );
    
        return view('foro.foro', compact('pquestions','answers'));
    }

    public function indexr()
    {
        $url = env('URL_SERVER_API');
        $answers =  $this->fetchDataFromApi($url . '/answers');
        // Suponiendo que $questions es un array, deberías convertirlo a una colección
        $answers = collect($answers);
    
        // Paginamos la colección, 10 elementos por página
        $perPage = 5; // Número de elementos por página
        $currentPage = request()->input('page', 1); // Obtenemos la página actual
        $pagedData = $answers->forPage($currentPage, $perPage); // Dividimos los datos
    
        $pquestions = new \Illuminate\Pagination\LengthAwarePaginator(
            $pagedData,
            $answers->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );
    
        return $answers;
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
        // Validar los datos enviados desde el formulario
        $validatedData = $request->validate([
            'affair' => 'required|string|max:255',
            'content' => 'required|string',
            'forum_category_id' => 'required|integer',
            'user_id' => 'integer',
        ]);
    
        // Enviar los datos validados a la API para crear una nueva pregunta
        $url = env('URL_SERVER_API') . '/questions';
        $response = $this->sendDataToApi($url, $validatedData);
    
        if ($response->successful()) {
            // Si la pregunta fue creada exitosamente, redirigir al listado de preguntas
            return redirect()->route('api.v1.questions.index')->with('success', 'Pregunta creada exitosamente.');
        } else {
            // Si hubo un error, redirigir de vuelta al formulario con un mensaje de error
            return back()->withErrors('No se pudo crear la pregunta. Inténtalo nuevamente.');
        }
    }
    

    private function sendDataToApi($url, $data)
{
    // Envía una solicitud POST a la API con los datos proporcionados
    $response = Http::post($url, $data);
    return $response; // Devuelve la respuesta de la API
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $url = env('URL_SERVER_API');

        $question = $this->fetchDataFromApi($url . '/questions/' . $id);

        return $question;
        
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