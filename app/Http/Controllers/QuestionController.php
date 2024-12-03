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


    // private function fetchDataFromApi($url)
    // {
    //     try {
    //         $response = Http::timeout(30)
    //             ->withoutVerifying() // Temporal para desarrollo
    //             ->withOptions(['debug' => true]) // Opcional: para debugging
    //             ->get($url);

    //         return $response->json();
    //     } catch (\Exception $e) {
    //         \Log::error('Error al conectar con la API: ' . $e->getMessage());
    //         return []; // Manejar error devolviendo un array vacío
    //     }
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $url = env('URL_SERVER_API');

    // Obtener datos desde la API
    $questions = $this->fetchDataFromApi($url . '/questions');
    $answers = $this->fetchDataFromApi($url . '/answers');
    $users = $this->fetchDataFromApi($url . '/users');
    $lawyers = $this->fetchDataFromApi($url . '/lawyers');
    $categories = $this->fetchDataFromApi($url . '/forumCategories');

    // Convertir los arrays a colecciones
    $questions = collect($questions);

    // Asegurar que las fechas sean interpretadas correctamente
    $questions = $questions->map(function ($question) {
        $question['created_at'] = \Carbon\Carbon::parse($question['created_at']);
        return $question;
    });

    // Ordenar las preguntas por `created_at` en orden descendente
    $questions = $questions->sortByDesc('created_at')->values();

    // Configurar la paginación
    $perPage = 9; // Número de elementos por página
    $currentPage = request()->input('page', 1); // Obtener la página actual
    $pagedData = $questions->forPage($currentPage, $perPage); // Dividir los datos

    $pquestions = new \Illuminate\Pagination\LengthAwarePaginator(
        $pagedData->values(), // Asegurar que los índices estén bien configurados
        $questions->count(),
        $perPage,
        $currentPage,
        ['path' => request()->url()]
    );

    // Pasar datos a la vista
    return view('foro.foro', compact('pquestions', 'answers', 'users', 'categories', 'lawyers'));
}

public function indexlogin()
{
    $url = env('URL_SERVER_API');

    // Obtener datos desde la API
    $questions = $this->fetchDataFromApi($url . '/questions');
    $answers = $this->fetchDataFromApi($url . '/answers');
    $users = $this->fetchDataFromApi($url . '/users');
    $lawyers = $this->fetchDataFromApi($url . '/lawyers');
    $categories = $this->fetchDataFromApi($url . '/forumCategories');

    // Convertir los arrays a colecciones
    $questions = collect($questions);

    // Asegurar que las fechas sean interpretadas correctamente
    $questions = $questions->map(function ($question) {
        $question['created_at'] = \Carbon\Carbon::parse($question['created_at']);
        return $question;
    });

    // Ordenar las preguntas por `created_at` en orden descendente
    $questions = $questions->sortByDesc('created_at')->values();

    // Configurar la paginación
    $perPage = 9; // Número de elementos por página
    $currentPage = request()->input('page', 1); // Obtener la página actual
    $pagedData = $questions->forPage($currentPage, $perPage); // Dividir los datos

    $pquestions = new \Illuminate\Pagination\LengthAwarePaginator(
        $pagedData->values(), // Asegurar que los índices estén bien configurados
        $questions->count(),
        $perPage,
        $currentPage,
        ['path' => request()->url()]
    );

    // Pasar datos a la vista
    return view('foro.forologin', compact('pquestions', 'answers', 'users', 'categories', 'lawyers'));
}


   public function verificar(){

    $userId = auth()->id();
    return $userId;
   }

   public function like($id)
   {
       $url = env('URL_SERVER_API') . '/questions/' . $id . '/like'; // Supongamos que tu API tiene esta ruta configurada

       $response = Http::post($url);

       if ($response->successful()) {
           return response()->json(['message' => 'Like registrado con éxito', 'likes' => $response->json()['likes']]);
       }

       return response()->json(['message' => 'Error al registrar el like'], 500);
   }

   // Método para incrementar los "dislikes" de una pregunta
   public function dislike($id)
   {
       $url = env('URL_SERVER_API') . '/questions/' . $id . '/dislike'; // Supongamos que tu API tiene esta ruta configurada

       $response = Http::post($url);

       if ($response->successful()) {
           return response()->json(['message' => 'Dislike registrado con éxito', 'dislikes' => $response->json()['dislikes']]);
       }

       return response()->json(['message' => 'Error al registrar el dislike'], 500);
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

        // Validar los datos enviados desde el formulario (sin user_id)
        $validatedData = $request->validate([
            'affair' => 'required|string|max:255',
            'user_id' => 'required|integer',
            'forum_category_id' => 'required|integer',
            'date_publication' => 'required|date',
            'content' => 'required|string',

        ]);

        // Enviar los datos a la API usando Http::post
        $response = Http::post('https://apijusticelaw-production.up.railway.app/v1/questions', [
            'affair' => $validatedData['affair'],
            'user_id' => $validatedData['user_id'],

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







    public function indexlogins()
    {
        $url = env('URL_SERVER_API');
    
        // Obtener datos desde la API
        $questions = $this->fetchDataFromApi($url . '/questions');
        $answers = $this->fetchDataFromApi($url . '/answers');
        $users = $this->fetchDataFromApi($url . '/users');
        $lawyers = $this->fetchDataFromApi($url . '/lawyers');
        $categories = $this->fetchDataFromApi($url . '/forumCategories');
    
        // Convertir los arrays a colecciones
        $questions = collect($questions);
    
        // Asegurar que las fechas sean interpretadas correctamente
        $questions = $questions->map(function ($question) {
            $question['created_at'] = \Carbon\Carbon::parse($question['created_at']);
            return $question;
        });
    
        // Ordenar las preguntas por `created_at` en orden descendente
        $questions = $questions->sortByDesc('created_at')->values();
    
        // Configurar la paginación
        $perPage = 9; // Número de elementos por página
        $currentPage = request()->input('page', 1); // Obtener la página actual
        $pagedData = $questions->forPage($currentPage, $perPage); // Dividir los datos
    
        $pquestions = new \Illuminate\Pagination\LengthAwarePaginator(
            $pagedData->values(), // Asegurar que los índices estén bien configurados
            $questions->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );
    
        // Pasar datos a la vista
        return view('foro.forologinlawyer', compact('pquestions', 'answers', 'users', 'categories', 'lawyers'));
    }

}
