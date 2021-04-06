<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'ASC')->get();
        $data = compact('tasks');
        return view('tasks.index', $data);
    }
}
