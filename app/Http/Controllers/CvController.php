<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Response;

class CvController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function index2()
    {
        return view('index');
    }
    public function downloadImage($imageName)
    {
        $path = public_path('assets\image' .'\\'. $imageName .'.jpg');
        return Response::download($path);
    }
}
