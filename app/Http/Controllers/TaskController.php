<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $users = User::has('projects')->get();
        $projects = Project::all();

        return view('tasks.create', compact('users', 'projects'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'required|string|max:1000',
            'user_id' => 'required|exists:users,id',
            'project_id' => 'required|exists:projects,id',
        ]);

        Task::create([
            'name' => $validatedData['name'],
            'details' => $validatedData['details'],
            'user_id' => $validatedData['user_id'],
            'project_id' => $validatedData['project_id'],
        ]);

        return redirect()->route('tasks.index');
    }



    public function updateStatus(Request $request, Task $task, $action)
    {
        if ($action === 'complete') {
            $task->completed = true;
        } elseif ($action === 'incomplete') {
            $task->completed = false;
        } else {
            return response()->json(['error' => 'Invalid action'], 400);
        }

        $task->save();
        return redirect()->route('tasks.index');
    }


}
