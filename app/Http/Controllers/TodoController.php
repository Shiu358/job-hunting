<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Todo $todo)
    {
        return view('index')->with(['todos' => $todo->getPaginateByLimit()]);
    }
    
    public function show(Todo $todo)
    {
        return view('show')->with(['todo' => $todo]);
    }

}
