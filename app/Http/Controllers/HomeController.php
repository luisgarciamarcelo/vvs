<?php

namespace GPOVALLAS\Http\Controllers;

use GPOVALLAS\Column;
use GPOVALLAS\Pantallas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home')->with(['columns' => Column::all()]);
        $count = Pantallas::all()->where('pais_id',1)->where('estatus',2);
        return view('home')->with(['alerts' => count($count)]);
    }


}
