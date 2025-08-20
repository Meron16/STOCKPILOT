<x-app-layout>
    <h1>Add Task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Task title">
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Save</button>
    </form>
</x-app-layout>
