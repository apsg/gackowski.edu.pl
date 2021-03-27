@extends('layouts.index')

@section('title', 'Blog | Szymon Gackowski')

@section('content')
    <div class="card-inner blog blog-post animated active" id="blog-card">
        <div class="card-wrap">

            <blog-post slug="{{ $slug }}"></blog-post>

        </div>
    </div>
@endsection
