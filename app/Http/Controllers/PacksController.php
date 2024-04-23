<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Opakovki;

class PacksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Fetch all Opakovki records
        $opakovkis = Opakovki::all();

        return view('packs', compact('opakovkis'));
    }
    
}
