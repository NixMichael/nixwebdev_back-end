@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div>
                    @if(Auth::user())
                        <div class="section-links">
                            <a class="button-link button" href="{{route('blogposts')}}">Manage Blog Posts</a>
                            <a class="button-link button" href="{{route('projects')}}">Manage Projects</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
