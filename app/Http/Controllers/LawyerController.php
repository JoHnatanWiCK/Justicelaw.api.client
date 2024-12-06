<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LawyerController extends Controller
{

    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json(); 
    }

    public function index()
    {
        $url = env('URL_SERVER_API');

        $lawyers = $this->fetchDataFromApi($url . '/lawyers');

        return $lawyers;

        // return view('lawyers.index', compact('lawyers'));
    }


    public function indexva()
    {
        $url = env('URL_SERVER_API');


        $lawyers = $this->fetchDataFromApi($url . '/lawyers');

        $lawyerPofiles = $this->fetchDataFromApi($url . '/lawyerPofiles');
        
        return view('va.verificarabogado',compact('lawyers','lawyerPofiles'));

        // return view('lawyers.index', compact('lawyers'));
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

        $lawyer = $this->fetchDataFromApi($url . '/lawyers/' . $id);

        return $lawyer;

        // return view('notifications.show', compact('notification'));
    }

    public function showva(string $id)
    {
        $url = env('URL_SERVER_API');

        $lawyere = $this->fetchDataFromApi($url . '/lawyers/' . $id);

        $lawyers = $this->fetchDataFromApi($url . '/lawyers');
        $lawyerPofiles = $this->fetchDataFromApi($url . '/lawyerProfile');


        return view('va.verificarshow',compact('lawyere','lawyers','lawyerPofiles')) ;

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
        $validatedData = $request->validate([
            'name' => 'required|string|max:30',
            'last_name' => 'required|string|max:50',
            'type_document_id' => 'required|string|max:10',
            'document_number' => 'required|string|max:10',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8', // Opcional si no siempre se actualiza
            'verification' => 'required|integer',
        ]);
    
        // Preparar los datos para la solicitud
        $data = [
            'name' => $validatedData['name'],
            'last_name' => $validatedData['last_name'],
            'type_document_id' => $validatedData['type_document_id'],
            'document_number' => $validatedData['document_number'],
            'email' => $validatedData['email'],
            'verification' => $validatedData['verification'],
        ];
    
        // Agregar la contraseña solo si se envía
        if (!empty($validatedData['password'])) {
            $data['password'] = bcrypt($validatedData['password']); // Encriptar contraseña
        }
    
        // Construir la solicitud a la API
        $response = Http::put("https://apijusticelaw-production.up.railway.app/v1/lawyers/$id", [
            'name' => $validatedData['name'],
            'last_name' => $validatedData['last_name'],

            'type_document_id' => $validatedData['type_document_id'],
            'document_number' => $validatedData['document_number'],
            'email' => $validatedData['email'],
            'verification' => $validatedData['verification']


        ]);        
    
        // Manejar la respuesta de la API
        if ($response->successful()) {
            return response()->json([
                'message' => 'Abogado actualizado exitosamente',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Error al actualizar al abogado',
                'details' => $response->json(),
            ], $response->status());
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Enviar la solicitud de eliminación a la API usando Http::delete
        $response = Http::delete("https://apijusticelaw-production.up.railway.app/v1/lawyers/$id");
    
        // Manejar la respuesta de la API
        if ($response->successful()) {
            return redirect()->back()->with('success', 'Abogado eliminado exitosamente');
        } else {
            return redirect()->back()->withErrors(['message' => 'Error al eliminar el abogado']);
        }
    }
    
    
    }



