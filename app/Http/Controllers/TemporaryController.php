<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemporaryController extends Controller
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
        return view('frontend.pages.courses');
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

    public function registration()
    {
        return view('frontend.pages.registration');
    }

    public function checkout()
    {
        return view('frontend.pages.checkout');
    }
}