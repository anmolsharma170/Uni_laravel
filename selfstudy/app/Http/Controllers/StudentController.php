<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function ageGreaterThan18()
    {
        $students = Student::where('age', '>', 18)->get();
        return $students;
    }

    public function gradeAorB()
    {
        $students = Student::whereIn('grade', ['A', 'B'])->get();
        return $students;
    }

    public function registeredBetween()
    {
        $students = Student::whereBetween(
            'registration_date',
            ['2024-01-01', '2024-12-31']
        )->get();

        return $students;
    }
}