@extends('layout.template')

@section('content')
<h1>Add your blog post here....</h1>
<form method="post" action="{{ route('blog.store') }}">
    @csrf
    <div class="form-group">
      <label for="Title">Title</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
    </div>
    <div class="form-group">
      <label for="subtitle">Subtitle</label>
      <input type="text" name="subtitle" class="form-control" id="exampleInputPassword1" placeholder="Enter Subtitle">
    </div>
    <div class="form-group">
        <label for="Content">Content</label>
        <textarea name="content" contenteditable="true" id="editor" cols="30" rows="10"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection