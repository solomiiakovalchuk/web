<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дані про студентку</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Лабораторна робота №1</h1>
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Прізвище та ім’я:</strong> {{ $student }}</p>
                <p class="card-text"><strong>Номер групи та назва вузу:</strong> {{ $student->group }}, {{ $student->university }}</p>
                <p class="card-text"><strong>Тема курсового проекту:</strong> {{ $student->projectTopic }}</p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
