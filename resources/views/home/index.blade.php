@extends('layouts.app')

@section('content')

<div class="section-links">
    <a class="section-link" href="{{route('blogposts')}}">New Blog Post</a>
    <a class="section-link" href="{{route('projects')}}">Manage Projects</a>
</div>

@endsection