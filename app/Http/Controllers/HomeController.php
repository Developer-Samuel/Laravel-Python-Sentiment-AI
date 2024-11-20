<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class HomeController extends Controller
{
    public function index()
    {
        $positiveCount = Comment::where('sentiment', 'positive')->count();
        $neutralCount = Comment::where('sentiment', 'neutral')->count();
        $negativeCount = Comment::where('sentiment', 'negative')->count();

        $data = [
            'positiveCount' => $positiveCount,
            'neutralCount' => $neutralCount,
            'negativeCount' => $negativeCount,
        ];

        return response()->json($data);
    }
}
