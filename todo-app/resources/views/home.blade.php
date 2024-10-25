@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto p-6">
        <div class="text-center my-8">
            <h1 class="text-4xl font-bold text-gray-800">Welcome to To-Do App for Teams</h1>
            <p class="mt-4 text-gray-600">Manage your team's tasks efficiently and effectively.</p>
        </div>

        <div class="flex justify-center space-x-4 my-8">
            <a href="{{ route('tasks.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                View Task List
            </a>
            <a href="{{ route('tasks.create') }}" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
                Create New Task
            </a>
            <a href="{{ route('about') }}" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">
                About Us
            </a>
        </div>

        <!-- Информация о приложении -->
        <div class="bg-white shadow-md rounded-lg p-6 max-w-4xl mx-auto">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">What is To-Do App?</h2>
            <p class="text-gray-600">
                To-Do App for Teams is designed to help teams manage their tasks in an organized and collaborative manner.
                Assign tasks to team members, set priorities, track progress, and keep everyone on the same page. Whether 
                you're working on a small project or managing a large team, our app will help you stay focused and productive.
            </p>
        </div>
    </div>
@endsection
