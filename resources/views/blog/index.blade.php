@extends('layouts.master')

@section('content')
<div class="container mt-5">
           

           @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <!-- Featured blog post-->
                <div class="col-lg-8">
                    @foreach($data as $value)
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="images/{{ $value->image }}" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">{{ $value->created_at->format('M, d Y H:i:s A'); }}</div>
                                <h2 class="card-title">{{ $value->title }}</h2>
                                <p class="card-text">{{ $value->description }}</p>
                                <a class="btn btn-primary" href="{{ route('blog.article', $value->id) }}">Read more →</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                            
@endsection