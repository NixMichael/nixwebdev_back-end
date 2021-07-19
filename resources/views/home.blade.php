@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div>
                    @if(Auth::user())
                        <div class="section-links">
                            <a class="section-link button" href="{{route('blogposts')}}">New Blog Post</a>
                            <a class="section-link button" href="{{route('projects')}}">Manage Projects</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection