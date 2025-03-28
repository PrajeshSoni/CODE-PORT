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

    public function show($id)
    {
        $subcourse = Subcourse::findOrFail($id);
        return view('subcourses.show', compact('subcourse'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('subcourses.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'video' => 'required|string',
            'duration' => 'required',
            'document_url' => 'required|string',
        ]);

        Subcourse::create($request->all());

        return redirect()->route('subcourses.index')
            ->with('success', 'Subcourse created successfully.');
    }

    public function edit($id)
    {
        $subcourse = Subcourse::findOrFail($id);
        $courses = Course::all();
        return view('subcourses.edit', compact('subcourse', 'courses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'video' => 'required|string',
            'duration' => 'required',
            'document_url' => 'required|string',
        ]);

        $subcourse = Subcourse::findOrFail($id);
        $subcourse->update($request->all());

        return redirect()->route('subcourses.index')
            ->with('success', 'Subcourse updated successfully.');
    }

    public function destroy($id)
    {
        $subcourse = Subcourse::findOrFail($id);
        $subcourse->delete();

        return redirect()->route('subcourses.index')
            ->with('success', 'Subcourse deleted successfully.');
    }
}
