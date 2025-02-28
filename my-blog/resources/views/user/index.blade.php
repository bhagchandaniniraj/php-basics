@extends('layout.template')

@section('content')
<h1>All Data are going to get displayed here...</h1>
<div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
    </div>
    <div class="col-sm">
        <a href="{{route('blog.create')}}" class="btn btn-primary">+ Add Post</a>
    </div>
  </div>


<br/>
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
                    <td><a href="{{route('blog.show', $posts->id)}}">{{$posts->title}}</a></td>
                    <td><a href="{{route('blog.edit', $posts->id)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{ route('blog.destroy', $posts->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete Me!!!" class="btn btn-danger">
                        </form></td>
                </tr>
        @endforeach
    </tbody>
</table>
@endsection