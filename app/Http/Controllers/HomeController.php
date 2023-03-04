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
    public function index(string $locale)
    {
        if(! in_array($locale, ['es', 'en', 'it'])){
            $locale = 'en';
        }
        App::setLocale($locale);
        
        return view('home/index');
    }
}
