<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
use Response;
use View;

class TaskController extends Controller
{
    //

    public function index() {
        $tasks = Task::all();

        return View::make('welcome')->with('tasks',$tasks);
    }

    public function getTask($task_id) {
        $task = Task::find($task_id);

        return Response::json($task);
    }

    public function createTask(Request $request) {
        $task = new Task;
        $task->task = $request->task;
        $task->description = $request->description;

        $task->save();

        //$task = Task::create($request->all());

        return Response::json($task);
    }

    public function editTask(Request $request, $task_id) {
        $task = Task::find($task_id);

        $task->task = $request->task;
        $task->description = $request->description;

        $task->save();

        return Response::json($task);
    }

    public function deleteTask($task_id) {
        $task = Task::destroy($task_id);

        return Response::json($task);
    }
}
