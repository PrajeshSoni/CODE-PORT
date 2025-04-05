@extends('layouts.layout')
@section('content')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Nunito:400,700');


            * {
                transition: all 0.3s ease-out;
            }

            html,
            body {
                height: 100%;
                font-family: "Nunito", sans-serif;
                font-size: 16px;
            }



            .sidebar {
                padding: 0;
                width: 200px;
                background-color: #f1f1f1;
                height: 100%;
                overflow: auto;
                margin-bottom: 50px;
            }

            .sidebar a {
                display: block;
                color: black;
                padding: 16px;
                text-decoration: none;
            }

            .sidebar a.active {
                background-color: #04AA6D;
                color: white;
            }

            .sidebar a:hover:not(.active) {
                background-color: #555;
                color: white;
            }

            div.content {

                height: 1000px;
            }

            @media screen and (max-width: 700px) {
                .sidebar {
                    width: 100%;
                    height: auto;
                    position: relative;
                }

                .sidebar a {
                    float: left;
                }

                div.content {
                    margin-left: 0;
                }
            }

            @media screen and (max-width: 400px) {
                .sidebar a {
                    text-align: center;
                    float: none;
                }
            }

            .content .card-header {
                color: #1c509d;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }

            .content .card-header:hover {
                color: #0000ff;
                cursor: pointer;
            }

            .content .card-text {
                color: #000000;
                font-size: 15px;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }

            .content .card-title {
                color: #1c509d;
                margin-bottom: .75rem;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }

            .content .card-title:hover {
                color: #0000ff;
                cursor: pointer;
            }

            .card {

                min-height: 400px;
            }

            .card:hover {
                transition: all 0.2s ease-out;
                box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
                border-color: #00838d;
                top: -4px;
                /* border: 2px; */
                border-color: #00838d;
                color: fff;
                font-size: 20px;
            }


            .card:hover:before {
                transform: scale(2.15);

            }



            .card-text:hover {
                padding-top: 8px;
                padding-bottom: 10px;
                font-size: 18px;
                color: black;
            }

            .card-title {
                margin-top: 30px;
                font-size: 15px;
            }

            .card-title:hover {
                font-size: 20px;
            }

            .card-body {
                flex: 1 1 auto;
            }

            @media screen and (max-width: 600px) {
                div.example {
                    display: none;
                }
            }
        </style>
    </head>
    <div class="container d-flex justify-content-between">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Filter
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('question.show') }}" type="button">ALL</a></li>
                @foreach ($tags as $tags)
                    <li> <a class="dropdown-item" type="button"
                            href={{ route('question.show', $tags->id) }}>{{ $tags->t_title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-2 text-end">
            @can('Question-create')
                <a href="{{ route('question.create') }}" class="btn btn-success text-right"> {{ __('messages.Ask') }}
                </a>
            @endcan
        </div>
    </div>
    <div class="container">
        <div style="margin-top: 50px;">
            <div class="row">
                @foreach ($questionshow as $questionshow)
                    <div class="col-md-4">
                        <div class="card mt-2">
                            <div class="card-header">
                                {{ $questionshow->q_title }}
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $questionshow->q_body }}.</p>
                                <h5 class="card-title">{{ $questionshow->t_title }}</h5>
                                <br>
                                <a href="{{ route('reply.index', $questionshow->id) }}" class="btn btn-primary"
                                    type="button">{{ __('messages.Read') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center">
            {!! $questionshow->withQueryString()->links('pagination::bootstrap-5') !!}
            {{ $->links('pagination::bootstrap-5') }}
        </div> --}}
    </div>
@stop
