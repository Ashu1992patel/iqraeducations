<?php

use App\Models\Category;
use App\Models\Course;
use App\Models\Setting;

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

if (!function_exists('getSetting')) {
    function getSetting()
    {
        $setting = Setting::get();
        return $setting;
    }
}

if (!function_exists('active')) {
    function active($uri = '')
    {
        $active = '';
        if (request()->routeIs($uri)) {
            $active = 'active';
        }
        return $active;
    }
}
