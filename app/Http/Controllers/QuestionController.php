<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
        $users =  $this->fetchDataFromApi($url . '/users');
        $lawyers =  $this->fetchDataFromApi($url . '/lawyers');

        $categories =  $this->fetchDataFromApi($url . '/forumCategories');


        // Suponiendo que $questions es un array, deberías convertirlo a una colección
        $questions = collect($questions);
        $answers = collect($answers);
        
        $perPage = 9; // Número de elementos por página
        $currentPage = request()->input('page', 1); // Obtenemos la página actual
        $pagedData = $questions->forPage($currentPage, $perPage); // Dividimos los datos
    
        $pquestions = new \Illuminate\Pagination\LengthAwarePaginator(
            $pagedData,
            $questions->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );
    
        return view('foro.foro', compact('pquestions','answers','users','categories','lawyers'));
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
        // Obtener el ID del usuario autenticado
        $userId = auth()->id();
    
        // Validar los datos enviados desde el formulario (sin user_id)
        $validatedData = $request->validate([
            'affair' => 'required|string|max:255',
            'forum_category_id' => 'required|integer',
            'date_publication' => 'required|date',
            'content' => 'required|string',
        ]);
    
        // Enviar los datos a la API usando Http::post
        $response = Http::post('https://apijusticelaw-production.up.railway.app/v1/questions', [
            'affair' => $validatedData['affair'],
            'user_id' => $userId, // Agregar automáticamente el user_id
            'forum_category_id' => $validatedData['forum_category_id'],
            'date_publication' => $validatedData['date_publication'],
            'content' => $validatedData['content'],
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

        $question = $this->fetchDataFromApi($url . '/questions' . $id);

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