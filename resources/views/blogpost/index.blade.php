@extends('layouts.app')

@section('content')

<form action="/blogposts" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="webp" required>
    <input type="file" name="png" required>
    <input type="text" name="title" required>
    <textarea name="body" cols="30" rows="10" required></textarea>
    <input type="text" name="keywords" required>
    <button type="submit">Add Post</button>
</form>

@endsection