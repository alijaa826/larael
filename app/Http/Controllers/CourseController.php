<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('instructor')->latest()->get();
        return view('courses.index', compact('courses'));
    }
public function show(Course $course)
{
    $course->load('lessons', 'instructor');
    return view('courses.show', compact('course'));
    }
}


