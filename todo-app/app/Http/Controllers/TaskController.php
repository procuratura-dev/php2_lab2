<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
{
    $tasks = [
        ['id' => 1, 'title' => 'Первая задача', 'description' => 'Описание первой задачи'],
        ['id' => 2, 'title' => 'Вторая задача', 'description' => 'Описание второй задачи'],
        ['id' => 3, 'title' => 'Третья задача', 'description' => 'Описание третьей задачи'],
    ];

    return view('tasks.index', ['tasks' => $tasks]);
}


    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
{
    $task = [
        'id' => $id,
        'title' => 'Название задачи',
        'description' => 'Описание задачи',
        'created_at' => now()->subDays(3)->format('Y-m-d'),
        'updated_at' => now()->format('Y-m-d'),
        'status' => false, // Задача не выполнена
        'priority' => 'Средний',
        'assignedTo' => 'Иван Иванов',
    ];

    return view('tasks.show', ['task' => $task]);
}

    
    

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}

