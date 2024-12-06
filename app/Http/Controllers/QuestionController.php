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
     * 
     * 
     * 
     * 
     * 
     */



     public function likes(){
        $url = env('URL_SERVER_API');
        $likes = $this->fetchDataFromApi($url . '/likes');
        return $likes;
     }

     public function index()
{
    $url = env('URL_SERVER_API');

    // Obtener datos desde la API
    $questions = $this->fetchDataFromApi($url . '/questions');
    $answers = $this->fetchDataFromApi($url . '/answers');
    $users = $this->fetchDataFromApi($url . '/users');
    $lawyers = $this->fetchDataFromApi($url . '/lawyers');
    $categories = $this->fetchDataFromApi($url . '/forumCategories');
    $likes = $this->fetchDataFromApi($url . '/likes');


    // Convertir los arrays a colecciones
    $questions = collect($questions);

 // Enriquecer cada pregunta con el conteo de likes y dislikes
 $questions = $questions->map(function ($question) use ($url) {
    $question['created_at'] = \Carbon\Carbon::parse($question['created_at']);
    
    // Consultar los conteos de likes y dislikes desde la API
    $likesData = $this->fetchDataFromApi($url . '/likes/' . $question['id']);

    // Agregar los conteos al objeto de la pregunta
    $question['likes_count'] = $likesData['likes_count'] ?? 0;
    $question['dislikes_count'] = $likesData['dislikes_count'] ?? 0;

    return $question;
});



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
    $likes = $this->fetchDataFromApi($url . '/likes');


    // Convertir los arrays a colecciones
    $questions = collect($questions);

    $questions = $questions->map(function ($question) use ($url) {
        $likeData = $this->fetchDataFromApi($url . '/likes/' . $question['id']);

        $question['likes_count'] = $likeData['likes_count'] ?? 0;
        $question['dislikes_count'] = $likeData['dislikes_count'] ?? 0;

        return $question;
    });

// Retorna el objeto completo



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
    return view('foro.forologin', compact('pquestions', 'answers', 'users', 'categories', 'lawyers','likes'));
}


   public function verificar(){

    $userId = auth()->id();
    return $userId;
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

        $question = $this->fetchDataFromApi($url . '/questions/' . $id);

        return $question;

        // return view('categories.show', compact('typeDocument'));
    }


    public function shows(string $id)
    {
        $url = env('URL_SERVER_API');

        $like = $this->fetchDataFromApi($url . '/likes/' . $id);

        return $like;

        // return view('categories.show', compact('typeDocument'));
    }

    
    public function showlikes(string $id)
    {
        $url = env('URL_SERVER_API');

        $like = $this->fetchDataFromApi($url . '/likes/' . $id . '/reactions');

        return $like;

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
