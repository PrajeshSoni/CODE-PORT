@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <h2>Replies</h2>


        <table class="table table-bordered">
            <thead>
                <tr>

                    <th scope="col">Reply</th>
                    <th scope="col">Question Title</th>
                    <th scope="col">User</th>
                    <th scope="col">operation</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($repliesshow as $repliesshow)
                    <tr>
                        <td>{!! strip_tags($repliesshow->reply) !!}</td>
                        <td>{{ $repliesshow->q_title }}</td>
                        <td>{{ $repliesshow->u_id }}</td>
                        @can('replay-delete')
                            <td><a href="{{ route('reply.delete', $repliesshow->id) }}" class="btn btn-danger"
                                    style="display:inline"> delete</a></td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
