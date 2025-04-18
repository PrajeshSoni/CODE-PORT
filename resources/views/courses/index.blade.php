@extends('layouts.layout')
@section('content')
    <div class="container">
        @if (auth()->check())
            @if (auth()->user()->isAdministrator())
                <div class="row">
                    <div class="col-md-12">
                        <h1>Courses</h1>
                        <a href="{{ route('courses.create') }}" class="btn btn-primary mb-2">Add Course</a>
                        <div class="row">
                            @foreach ($courses as $course)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('Coureses_image/' . $course['course_image']) }}"
                                                class="card-img-top" alt="Course Image">
                                            <h5 class="card-title">
                                                <a href="{{ route('courses.show', $course->id) }}">{{ $course->title }}</a>
                                            </h5>
                                            <p class="card-text">
                                                {{ $course['description'] }}
                                            </p>
                                            <p class="card-text">{{ $course->teg_id }}</p>
                                            <a href="{{ route('courses.edit', $course->id) }}"
                                                class="btn btn-primary">Edit</a>
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
            @elseif (auth()->user()->isManager())
                <div class="row">
                    <div class="col-md-12">
                        <h1>Courses</h1>
                        <a href="{{ route('courses.create') }}" class="btn btn-primary mb-2">Add Course</a>
                        <div class="row">
                            @foreach ($courses as $course)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('Coureses_image/' . $course['course_image']) }}"
                                                class="card-img-top" alt="Course Image">
                                            <h5 class="card-title
                                    "><a
                                                    href="{{ route('courses.show', $course->id) }}">{{ $course->title }}</a>
                                            </h5>
                                            <p class="card-text">
                                                {{ $course['description'] }}
                                            </p>
                                            <p class="card-text">{{ $course->teg_id }}</p>
                                            <a href="{{ route('courses.edit', $course->id) }}"
                                                class="btn btn-primary">Edit</a>
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
            @else
                <div class="container mt-4">
                    <div class="row">
                        @foreach ($courses as $course)
                            <div class="col-md-4">
                                <div class="card shadow-sm">
                                    <img src="{{ asset('Coureses_image/' . $course['course_image']) }}"
                                        class="card-img-top" alt="Course Image">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $course['title'] }}</h5>
                                        <p class="card-text">
                                            {{ $course['description'] }}
                                        </p>
                                        @php
                                            $isEnrolled = $enrollerUser->contains(function ($enroller) use ($course) {
                                                return $enroller->user_id == auth()->user()->id &&
                                                    $enroller->course_id == $course->id;
                                            });
                                        @endphp
                                        @if ($isEnrolled)
                                            <a href="{{ route('courses.show', $course->id) }}"
                                                class="btn btn-primary w-100 mt-2">Show Your Course</a>
                                        @else
                                            <form action="{{ route('enrollers.store', $course->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary w-100 mt-2">Enroll
                                                    Now</button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endif
    </div>
@endsection
