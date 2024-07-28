@extends('layouts.layout')
@section('content')

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        body .heading {
            font-weight: 600;
        }

        body hr {
            width: 50px;
            border: none;
            text-align: center;
            border-bottom: 1px solid rgba(119, 119, 119, 0.25)
        }

        .reply {
            min-height: auto;
        }

        .card-body {
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .card .card-body p.card-header {
            color: #1c509d;
            font-size: 18px;
        }

        .card .card-body p.card-header:hover {
            color: #0000ff;
            cursor: pointer;
        }

        .card .card-body p.card-text {
            color: #000000;
        }

        .card .card-body:hover {
            transition: all 0.2s ease-out;
            box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
            border-color: #00838d;
            top: -4px;


        }

        .card .mt .card-header {
            color: #1c509d;
            font-size: 18px;
        }

        .card .mt .card-header:hover {
            color: #0000ff;
            cursor: pointer;
        }

        .card .mt .card-bodyy {
            color: #000000;
            padding: 10px;
            text-overflow: ellipsis;
            overflow: hidden;
            min-height: 200px;
        }

        .card .mt .card-bodyy:hover {
            padding: 20px;
            font-size: 20px;
        }

        .card .mt:hover {
            transition: all 0.2s ease-out;
            box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
            border-color: #00838d;
            top: -4px;
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
    </style>


    <div class="reply" style="margin-top: 50px;">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <h1 class="heading">{{ __('messages.Questions') }}</h1>
            <div class="content">
                <div class="card mt-2">
                    <div class="card-body">
                        <p class="card-header">{{ $question->q_title }}</p>
                        <p class="card-text"> {!! strip_tags($question->q_body) !!}</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="shadow p-3 mb-5 bg-white rounded">
            <h1 class="heading">{{ __('messages.Reply') }}</h1>
            <hr>
            @foreach ($replies as $replies)
                <div class="card mt-2">
                    <div class="mt">

                        <div class="card-header">{!! strip_tags($replies->u_id) !!}</div>
                        <div class="card-bodyy"> <a href="#" style="text-decoration: none; color:#000000;">
                                {{ $replies->reply }} </a></div>
                        <div class="card-footer">{{ $replies->r_date }}</div>

                    </div>
                </div>
            @endforeach
        </div>
        @can('replay-create')
            <form method="post" action="{{ route('reply.store') }}">
                @csrf
                <div class="shadow p-3 mb-5 bg-white rounded">

                    <div class="form-group">
                        <input type="hidden" class="form-control" name="q_id" value="{{ $question->id }}">
                    </div>

                    <div class="form-group">
                        <label for="description">{{ __('messages.Reply') }}:</label>
                        <textarea name="reply" class="form-control" id="description" cols="10" rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn btn-outline-primary">{{ __('messages.Answer') }}</button>
                </div>
            </form>
        @endcan
    </div>

@stop
