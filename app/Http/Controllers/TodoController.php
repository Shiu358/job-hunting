<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Todo $todo)
    {
        return view('index')->with(['todos' => $todo->get()]);
    }

}
