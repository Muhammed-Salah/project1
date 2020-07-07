<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home() {
        $todoss= Todo::all();
        // dd($todos);
        return view('home', ['todos'=> $todoss]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate() ([
            'titleerror' => 'required|max:124'
        ]);

        // dd($request->post('title'));
        $todo= new Todo();
        $todo-> title= $request->post('title');
        $todo->save();
        return redirect(route('home'));
    }
}
