<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();

        return view('pizzas', [
            'pizzas' => $pizzas
        ]);
    }
    public function show($id)
    {
        // Use the $id variable to query the db for details
        return view('details', ['id' => $id]);
    }
}
