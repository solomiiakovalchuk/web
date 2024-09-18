<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;

Route::get('/', function () {
    $student = new Student(
        'Соломія',
        'Ковальчук',
        'Миколаївна',
        'ІПЗс-24-1',
        'Хмельницький національний університет',
        'Інформаційний вебпортал ФІТ'
    );
    
    return view('home', ['student' => $student]);
});

