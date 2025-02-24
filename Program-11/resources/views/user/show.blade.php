@extends('layout.template')


@section('content')
<h1>Individual Post</h1>
<h6>Title: {{$blog->title}}</h6>
<em>Subtitle: {{$blog->subtitle}}</em>
<br/>
<br/>
<br/>
<p>{{$blog->content}}</p>
<strong>User ID: {{$blog->user_id}}</strong>
@endsection