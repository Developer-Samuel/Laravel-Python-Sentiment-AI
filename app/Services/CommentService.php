<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentService
{
    public static function analyze(Request $request)
    {
        $comment = $request->input('text');

        $pythonScriptPath = app_path() . "/Python/sentiment_analysis.py";

        $output = shell_exec("python \"$pythonScriptPath\" '" . escapeshellarg($comment) . "'");

        $sentiment = trim($output);

        $comment = Comment::create([
            'text' => $comment,
            'sentiment' => $sentiment
        ]);

        return response()->json([
            'sentiment' => $output
        ]);
    }

}
