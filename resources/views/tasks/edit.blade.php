<x-app-layout>
    <h1>Edit Task</h1>
    <form method="POST" action="{{ route('tasks.update', $task) }}">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}">
        <textarea name="description">{{ $task->description }}</textarea>
        <button type="submit">Update</button>
    </form>
</x-app-layout>
