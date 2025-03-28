@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Courses</h1>
                <a href="{{ route('courses.create') }}" class="btn btn-primary mb-2">Add Course</a>
                <div class="row">
                    @foreach ($courses as $course)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title
                                    "><a
                                            href="{{ route('courses.show', $course->id) }}">{{ $course->title }}</a></h5>
                                    <p class="card-text">{{ $course->teg_id }}</p>
                                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('courses.delete', $course->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
@endsection
