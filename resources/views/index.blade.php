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
        <div class='todos'>
            @foreach ($todos as $todo)
                <div class='todo'>
                    <a href='/todos/'{{ $todos->id }}><h2 class='title'>{{ $todo->title }}</h2></a>
                    <p class='body'>{{ $todo->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $todos->links() }}
        </div>
    </body>
</html>
