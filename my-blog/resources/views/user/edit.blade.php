@extends('layout.template')

@section('content')
<h1>Edit your blog post here....</h1>

<form method="post" action="{{ route('blog.store') }}">
    @csrf
    <div class="form-group">
      <label for="Title">Title</label>
      <input type="text" name="title" value="{{$blog->title}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
    </div>
    <div class="form-group">
      <label for="subtitle">Subtitle</label>
      <input type="text" name="subtitle" value="{{$blog->subtitle}}" class="form-control" id="exampleInputPassword1" placeholder="Enter Subtitle">
    </div>
    <div class="form-group">
        <label for="Content">Content</label><br/>
        <textarea name="content" contenteditable="true" cols="30" rows="10" class="form-control">{{$blog->content}}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection