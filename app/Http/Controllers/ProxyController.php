<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProxyController extends Controller
{
    public function proxy(Request $request)
    {
        $url = $request->input('url');
        
        try {
            $response = Http::get($url);
            return $response->body();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error fetching URL'], 500);
        }
    }
}
