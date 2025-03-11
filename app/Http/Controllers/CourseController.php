<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index');
    }
    public function show($course)
    {
        return view('courses.show', ['course' => $course]);
    }
    public function create()
    {
        return view('courses.create');
    }
    public function store()
    {
        $course = new Course();
        $course->name = request('name');
        $course->save();
        return redirect('/courses');
    }
    public function edit($course)
    {
        return view('courses.edit', ['course' => $course]);
    }
    public function update($course)
    {
        $course->name = request('name');
        $course->save();
        return redirect('/courses/' . $course->id);
    }
    public function destroy($course)
    {
        $course->delete();
        return redirect('/courses');
    }
}
