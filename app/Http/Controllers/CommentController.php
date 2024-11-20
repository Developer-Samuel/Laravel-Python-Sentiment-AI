<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\CommentService;

class CommentController extends Controller
{
    public function analyze(Request $request)
    {
        return CommentService::analyze($request);
    }
}
