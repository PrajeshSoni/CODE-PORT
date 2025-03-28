<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subcourse;
use App\Models\Tag;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    public function show($id)
    {
        $course = Course::join('tags', 'courses.tag_id', '=', 'tags.id')
            ->select('courses.*', 'tags.t_title')
            ->where('courses.id', $id)
            ->first();
        $subcoures = Subcourse::join('courses', 'subcourses.course_id', '=', 'courses.id')
            ->select('subcourses.*', 'courses.title')
            ->where('subcourses.course_id', $id)
            ->get();
        return view('courses.show', compact('course', 'subcoures'));
    }
    public function create()
    {
        $tags = Tag::all();
        return view('courses.create', compact('tags'));
    }
    public function store()
    {
        $course = new Course();
        $course->title = request('title');
        $course->tag_id = request('tag_id');
        $course->save();
        return redirect()->route('courses.index')
            ->with('success', 'Course created successfully.');
    }
    public function edit($id)
    {
        $course = Course::find($id);
        $tags = Tag::all();
        return view('courses.edit', compact('course', 'tags'));
    }
    public function update($course)
    {
        $course->name = request('name');
        $course->save();
        return redirect()->route('courses.index')
            ->with('success', 'Course updated successfully');
    }
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('courses.index')
            ->with('success', 'Course deleted successfully.');
    }
}
