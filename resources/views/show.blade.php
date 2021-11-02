<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>To-Do</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>ToDo List</h1>
        <div class='todo'>
            <h2 class='title'>{{ $todo->title }}</h2>
            <p class='body'>{{ $todo->body }}</p>
            <p class='updated_at'>{{ $todo->updated_at }}</p>
        </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
