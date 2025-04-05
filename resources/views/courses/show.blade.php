@extends('layouts.layout')
@section('content')
    @if (auth()->check())
        @if (auth()->user()->isAdministrator())
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Dashboard</div>
                            <div class="panel-body">
                                <h1>{{ $course->title }}</h1>
                                <p>{{ $course->t_title }}</p>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('courses.delete', $course->id) }}" method="POST"
                                    style="display: inline;">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <div class="sub-courses">
                                    <h1>Sub Courses</h1>
                                    @foreach ($subcoures as $subCourse)
                                        <h1>{{ $sub_course->title }}</h1>
                                        <p>{{ $sub_course->t_title }}</p>
                                    @endforeach
                                </div>
                                <a href="{{ route('subcourses.create', ['course' => $course->id]) }}"
                                    class="btn btn-primary">Add
                                    Sub Course</a>
                                <a href="{{ route('courses.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
        @endif
    @endif
@endsection
