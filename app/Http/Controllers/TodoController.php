<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    public function index()
    {
    	$todo = Todo::all();
    	return view('todo')->with('todo', $todo);
    }
    public function store(Request $Request)
    {
    	$todo_item = $Request->input('todo_item');
    	$todo = new Todo;
    	$todo->item = $todo_item;
    	$todo->save();

    	$todo = Todo::all();
    	return view('todo')->with('todo', $todo);
    }
    public function delete($id)
    {
    	$todo = Todo::findOrFail($id);
    	$todo->delete();

    	return redirect('todo');
    }
}
