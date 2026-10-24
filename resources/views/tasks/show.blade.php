<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $task->title }}</title>
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>Status: <strong>{{ ucfirst($task->status) }}</strong></p>
    
    <hr>
    <a href="/tasks">← Back to Task List</a>
</body>
</html>
