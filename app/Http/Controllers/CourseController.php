<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Enrolleruser;
use App\Models\Subcourse;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $enrollerUser = Enrolleruser::join('users', 'enrollerusers.user_id', '=', 'users.id')
            ->join('courses', 'enrollerusers.course_id', '=', 'courses.id')
            ->select('enrollerusers.*', 'users.name as user_name', 'courses.title as course_title')
            ->get();
        // dd($enrollerUser);
        return view('courses.index', compact('courses', 'enrollerUser'));
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
        $enrollmentCount = DB::table('enrollerusers')->where('course_id', $id)->count();
        // dd($enrollmentCount);
        return view('courses.show', compact('course', 'subcoures', 'enrollmentCount'));
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

        //add file upload
        $file = request()->file('course_image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('Coureses_image'), $filename);

        $course->course_image = $filename;
        $course->description = request('description');

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
