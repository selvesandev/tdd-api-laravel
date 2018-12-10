<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function store()
    {
        return response()->json([], 201);
    }
}
