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

    public function store(Request $request) 
    {
        
        $validatedData = $request->validate([
            'title' => 'required|max:124'
        ]);
        Todo::create($validatedData);
        // dd($request->post('title'));
        // $todo= new Todo;
        // $todo-> title= $request->title;
        // $todo->save();

        return redirect(route('home'));
    }

    public function update(Todo $todoid)
    {
        return view('update',compact ('todoid'));
    }

    public function edit(Request $request, Todo $id) 
    {
        
        $validatedData = $request->validate([
            'title' => 'required|max:124'
        ]);
        $id->update($validatedData);
        return redirect(route('home'));
    }

    public function delete(Todo $todoid)
    {
        $todoid->delete();
        return redirect(route('home'));
    }
}
