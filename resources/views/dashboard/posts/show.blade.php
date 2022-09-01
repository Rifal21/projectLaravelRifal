@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">

      <h2 class="mb-3">{{ $post->title }}</h2>

      <a href="/dashboard/posts" class="btn btn-success mb-3"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to All My Posts</a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
      <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger mb-3" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span> Delete</button>
      </form>

      @if ($post->image)
      <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
      </div>
      
      @else
      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
      @endif
      

      <article class="my-3 ">{!! $post->body !!}</article>
      
    

       
    </div>
  </div>
</div>
@endsection