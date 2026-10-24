<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task List</title>
</head>
<body>
    <h1>My Tasks</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }} — 
                @if ($task->status === 'done')
                    <span style="color: green;">Done</span>
                @else
                    <span style="color: orange;">Pending</span>
                @endif
                | <a href="/tasks/{{ $task->id }}">View Details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
