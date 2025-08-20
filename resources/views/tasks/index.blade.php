<x-app-layout>
    <h1 class="text-2xl font-bold">My Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add Task</a>

    <ul>
        @foreach($tasks as $task)
            <li>
                <strong>{{ $task->title }}</strong> - {{ $task->is_completed ? '✅ Done' : '❌ Pending' }}
                <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app-layout>
