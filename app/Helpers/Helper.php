<?php

use App\Models\Category;
use App\Models\Course;

if (!function_exists('getCategories')) {
    function getCategories()
    {
        $categories = Category::with('courses')->get();
        return $categories;
    }
}

if (!function_exists('getCourses')) {
    function getCourses()
    {
        $courses = Course::with('category')->get();
        return $courses;
    }
}