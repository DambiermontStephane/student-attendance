<?php

namespace Attendances\Controllers;
use Attendances\Models\Student;

class AttendanceController
{
    static function index(): void
    {
        $title = 'Prendre les présences';
        $students = Student::all();

        view('attendances.index', compact('title', 'students'));
    }
}