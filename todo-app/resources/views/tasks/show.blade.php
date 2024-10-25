@extends('layouts.app')

@section('title', 'Task Details')

@section('content')
<x-task
    :id="$task['id']"
    :title="$task['title']"
    :description="$task['description']"
    :created_at="$task['created_at']"
    :updated_at="$task['updated_at']"
    :status="$task['status']"
    :priority="$task['priority']"
    :assignedTo="$task['assignedTo']"
    class="bg-white shadow-md rounded p-6"
/>
    <a href="{{ route('tasks.index') }}">Вернуться к списку задач</a>
@endsection
