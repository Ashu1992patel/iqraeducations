<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function welcome()
    {
        return view('frontend.pages.welcome');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function courses()
    {
        $categories = Category::with(['courses', 'files'])->get();
        $courses = Course::with('category')->get();
        return view('frontend.pages.courses', compact('categories', 'courses'));
    }

    public function courseDescription()
    {
        return view('frontend.pages.course-description');
    }

    public function teachers()
    {
        return view('frontend.pages.teachers');
    }

    public function teacherDescription()
    {
        return view('frontend.pages.teacher-description');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function gallery()
    {
        return view('frontend.pages.gallery');
    }
}
