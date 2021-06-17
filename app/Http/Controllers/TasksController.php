<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(Request $request)
    {
        $items = Task::all();
        return view('index', ['items' => $items]);
    }
    public function add(Request $request)
    {
        return view('todo.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, Task::$rules);
        $task = new Task;
        $form = $request->all();
        unset($form['_token_']);
        $task->fill($form)->save();
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $task = Task::find($request->id);
        return view('todo.update', ['item' => $task]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Task::$rules);
        $task = Task::find($request->id);
        $item = $request->all();
        unset($item['_token_']);
        $task->fill($item)->save();
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $task = Task::find($request->id);
        return view('/todo/delete', ['item' => $task]);
    }
    public function remove(Request $request)
    {
        Task::find($request->id)->delete();
        return redirect('/');
    }
}
