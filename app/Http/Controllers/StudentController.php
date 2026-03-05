<?php

namespace Attendances\Controllers;

use Attendances\Models\Student;

class StudentController
{
    static function index(): void
    {
        $title = 'Tous les étudiants';
        $students = Student::all();

        view('students.index', compact('title', 'students'));
    }
}

