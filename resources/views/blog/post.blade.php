@extends('layouts.master')

@section('content')


        <!-- Page content-->
        <div class="container mt-5">
           @include('partials.errors')
            <div class="row">
                <div class="col-lg-8 align-self-start">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Contact Us header-->
                            <header class="mb-8">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">Create a new blog entry</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-3">Express your mind!</div>
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">

                                <form action = "{{ route('blog.post') }}" method = "POST">

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Title</label>
                                        <input name = "title" type="text" class="form-control mb-1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Description</label>
                                        <textarea name = "description" class="form-control mb-1" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Content</label>
                                        <textarea name = "content" class="form-control mb-1" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1 mt-3">Categories</label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-check">
                                                    <input name = "categories" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                      Default checkbox
                                                    </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    {{ csrf_field() }}
                                    
                                    <button name = "submit" type="submit" class="btn btn-primary mt-5">Post</button>

                                </form>
                            </section>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
@endsection