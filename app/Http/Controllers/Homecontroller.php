<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Article;

class Homecontroller extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        return view('home');
    }

    public function articles() {
        $articles = Article::get();
        $data = [
          'data'   => $articles
        ];
        return view('articles', $data);
    }

    public function api() {
        $response = Http::get('https://api.escuelajs.co/api/v1/users');
        
        if($response->successful()) {
            $data = $response->object();
            return view('api', compact('data'));
        } else {
            // Handle the error response
            $data = [
                'error' => 'Failed to fetch data from API'
            ];
            return view('api', compact('data'));
        }
    
    }
}
