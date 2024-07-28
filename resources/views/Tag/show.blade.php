@extends('layouts.layout')

@section('content')
    <!-- tag-show css file -->
    <link rel="stylesheet" href="{{ asset('css/show_tag.css') }}">

    <body>
        <div class="container">
            <div class="row">
                @foreach ($tagshow as $tagshow)
                    <div class="col-md-4 pt-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ url('icon') }}/{{ $tagshow['t_icon'] }}" class="img-fluid img-thumbnail"
                                    alt=""><br><br>
                                <a href="{{ route('question.show', $tagshow->id) }}"
                                    class="card-title card-link h3">{{ $tagshow->t_title }}</a>

                                <p class="card-text">{{ $tagshow->t_des }}</p>
                                <a href="{{ route('question.show', $tagshow->id) }}" class="card-link">Edit</a>
                                <a href="#" class="card-link">Delete</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </body>
@endsection
