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
                                <p>Total Enrolled Users: {{ $enrollmentCount }}</p>
                                <div class="sub-courses">
                                    <h1>Sub Courses</h1>
                                    @foreach ($subcoures as $subCourse)
                                        <div class="sub-course card border mb-4 p-4">
                                            <h2>{{ $subCourse->title }}</h2>
                                            <p>{{ $subCourse->description }}</p>

                                            <div class="video-container">
                                                <iframe src="{{ $subCourse->document_url }}"
                                                    title="30 Days to Learn Laravel - Ep 01" allowfullscreen>
                                                </iframe>
                                            </div>
                                            <div class="flex">
                                                <a href="{{ route('subcourses.edit', $subCourse->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form
                                                    action="{{ route('subcourse.delete', ['course' => $course->id, 'subcourse' => $subCourse->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
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
            <style>
                .video-container {
                    position: relative;
                    padding-bottom: 56.25%;
                    height: 0;
                    overflow: hidden;
                    border-radius: 12px;
                    box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
                }

                .video-container iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: 0;
                }
            </style>
            @foreach ($subcoures as $subcourse)
                <div class="container text-center">
                    <h1 class="mb-4">Welcome to the Temporal Archive</h1>
                    <p class="mb-5">{{ $subcourse->title }}</p>

                    <div class="video-container mx-auto">
                        <iframe src="{{ $subcourse->document_url }}" title="30 Days to Learn Laravel - Ep 01"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="container my-4">
                    <div class="card shadow-sm">
                        <div class="card-body">

                            <!-- Views and Date -->
                            <h6 class="text-muted">{{ $enrollmentCount }} views ·
                                {{ $subcourse->created_at->format('Y-M-d') }}</h6>

                            <!-- Description (collapse) -->
                            <div id="descriptionCollapse" class="collapse">
                                <p class="card-text text-justify">
                                    {{ $subcourse->description }}
                                </p>
                            </div>

                            <!-- Toggle Button -->
                            <div class="mt-3">
                                <a class="btn btn-link p-0 text-decoration-none" data-bs-toggle="collapse"
                                    href="#descriptionCollapse" role="button" aria-expanded="false"
                                    aria-controls="descriptionCollapse">
                                    Show more
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    @endif
@endsection
