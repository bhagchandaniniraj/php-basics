@extends('layout.template')

@section('content')
<h1>All Data are going to get displayed here...</h1>

<table class="table table-hover table-stripped">
    <thead>
            <td>ID</td>
            <td>Title</td>
            <td>Edit</td>
            <td>Delete</td>
    </thead>
    <tbody>
        @foreach($arr as $posts)
                <tr>
                    <td>{{$posts->id}}</td>
                    <td>{{$posts->title}}</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
        @endforeach
    </tbody>
</table>
@endsection