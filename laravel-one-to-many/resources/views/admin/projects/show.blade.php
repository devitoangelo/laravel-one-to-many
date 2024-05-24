@extends('layouts.admin')


@section('content')
    <header class="py-3 bg-dark text-white">
        <div class="container">
            <h1>{{ $project->title }}</h1>

    
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img width="100%" src="{{ $project->cover_image }}" alt="{{ $project->title }}">
                </div>
                <div class="col">
                    <p> <strong>Title</strong> : {{ $project->title }}</p>
                    <p><strong>Description</strong> : {{ $project->content }}</p>
                </div>
            </div>

        </div>
    </section>
@endsection
