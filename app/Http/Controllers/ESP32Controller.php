<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ESP32Controller extends Controller
{
    //
    public function control(Request $request)
    {
        $ip = $request->input('ip');
        $action = $request->input('action');

        if (!$ip) {
            return back()->with('error', 'Ingresa la dirección IP del ESP32');
        }

        $url = "http://{$ip}/{$action}";

        try {
            $response = Http::get($url);
            return back()->with('success', "Respuesta del ESP32: " . $response->body());
        } catch (\Exception $e) {
            return back()->with('error', 'Error al conectar con el ESP32');
        }
    }
}
