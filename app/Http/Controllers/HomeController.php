<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(string $lang)
    {
        if(!in_array($lang, ['es', 'en', 'it'])){
            $lang = 'en';
        }
        App::setLocale($lang);
        
        return view('home/index');
    }
}
