<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcourse;
use App\Models\Course;

class SubcourseController extends Controller
{
    public function index()
    {
        $subcourses = Subcourse::all();
        return view('subcourses.index', compact('subcourses'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required',
            'document_url' => 'required|string',
        ]);

        Subcourse::create($request->all());

        return redirect()->route('subcourses.index')
            ->with('success', 'Subcourse created successfully.');
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        // dd(11);
        // $request->validate([
        //     'course_id' => 'required|exists:courses,id',
        //     'title' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'duration' => 'required',
        //     'document_url' => 'required|string',
        // ]);

        $subcourse = Subcourse::findOrFail($id);
        // dd($subcourse);
        $subcourse->update($request->all());

        return redirect()->route('courses.show', $subcourse->id)
            ->with('success', 'Subcourse updated successfully.');
    }
    public function destroy($id)
    {
        $subcourse = Subcourse::findOrFail($id);
        $subcourse->delete();

        return redirect()->route('subcourses.index')
            ->with('success', 'Subcourse deleted successfully.');
    }

    public function create()
    {
        $courses = Course::all();
        return view('subcourses.create', compact('courses'));
    }

    public function edit($id)
    {
        $subcourse = Subcourse::findOrFail($id);
        $courses = Course::all();
        return view('subcourses.edit', compact('subcourse', 'courses'));
    }

    public function show($id)
    {
        $subcourses = Subcourse::findOrFail($id);
        return view('subcourses.show', compact('subcourses'));
    }
}
