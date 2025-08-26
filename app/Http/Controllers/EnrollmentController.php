<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function store(Course $course)
    {
        Enrollment::firstOrCreate([
            'user_id' => auth()->id(),
            'course_id' => $course->id
        ]);

        return redirect()->route('courses.show', $course)->with('success', 'Berhasil daftar kursus!');
    }
}
