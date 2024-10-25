@extends('layouts.app')

@section('title', 'Tasks List')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Tasks</h1>

    <div class="space-y-4">
        @foreach($tasks as $task)
            <div class="border p-4 rounded bg-gray-100">
                <h2 class="text-xl font-semibold">{{ $task['title'] }}</h2>
                <p>{{ $task['description'] }}</p>
                <a href="{{ route('tasks.show', $task['id']) }}" class="text-blue-500 hover:underline">View</a>
            </div>
        @endforeach
    </div>
@endsection
