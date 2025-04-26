
@extends('layouts.main')

@section('title','show')

@section('content')
<div class="card bg-primary-content text-primary-content w-3xl m-auto mt-5">
  <div class="card-body text-black">
    <h2 class="card-title">title: {{$post->title}}</h2>
    <p>body : {{$post->body}} </p>
    <div class="card-actions justify-end">
    <button class="btn" onclick="window.location.href='{{ route('posts.index') }}'">Back</button>
    </div>
  </div>
</div>
@endsection