<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function submitRequest(Request $request)
    {

        echo($hola);
        dd();

        // Validar los datos de entrada
        $validatedData = $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'correo_electronico' => 'required|email|max:255',
            'numero_celular' => 'required|string|max:255',
            'tipo_tramite' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        // Guardar la solicitud en la base de datos
        $request = new Request();
        $request->nombre_completo = $validatedData['nombre_completo'];
        $request->correo_electronico = $validatedData['correo_electronico'];
        $request->numero_celular = $validatedData['numero_celular'];
        $request->tipo_tramite = $validatedData['tipo_tramite'];
        $request->descripcion = $validatedData['descripcion'];
        $request->save();

        // Enviar un correo electrónico de confirmación al usuario
        $email = new Email();
        $email->to($validatedData['correo_electronico'])->send('emails.request_confirmation', ['request' => $request]);

        // Mostrar un mensaje de éxito al usuario
        return redirect()->route('request.success');
    }
}
