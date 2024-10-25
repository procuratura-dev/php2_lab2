@props([
    'id',
    'title',
    'description',
    'created_at',
    'updated_at',
    'status',
    'priority',
    'assignedTo'
])

<div class="task border p-4 rounded mb-4">
    <h2 class="text-xl font-semibold">{{ $title }}</h2>
    <p>{{ $description }}</p>
    <p><strong>Дата создания:</strong> {{ $created_at }}</p>
    <p><strong>Дата обновления:</strong> {{ $updated_at }}</p>
    <p><strong>Статус:</strong> {{ $status ? 'Выполнена' : 'Не выполнена' }}</p>
    <p><strong>Приоритет:</strong> {{ $priority }}</p>
    <p><strong>Исполнитель:</strong> {{ $assignedTo }}</p>

    <!-- Действия над задачей -->
    <div class="mt-4">
        <a href="{{ route('tasks.edit', $id) }}" class="text-blue-500">Редактировать</a>
        <form action="{{ route('tasks.destroy', $id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500">Удалить</button>
        </form>
    </div>
</div>
