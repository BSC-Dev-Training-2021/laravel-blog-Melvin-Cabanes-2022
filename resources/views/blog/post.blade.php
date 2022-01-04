@extends('layouts.master')

@section('content')

        <!-- Page content-->
        <div class="container mt-5">
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

                                <form action = "{{ 'blog.post' }}" method = "POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Title</label>
                                        <input name = "title" type="text" class="form-control mb-1" value ="{{ old('title') }}">
                                        <span style = "color:red">@error( 'title' ){{ $message }} @enderror</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Description</label>
                                        <textarea name = "description" class="form-control mb-1"  rows="3" >{{old('description')}}</textarea>
                                        <span style = "color:red">@error( 'description' ){{ $message }} @enderror</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Content</label>
                                        <textarea name = "content" class="form-control mb-1" rows="5">{{old('content')}}</textarea>
                                        <span style = "color:red">@error( 'content' ){{ $message }} @enderror</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">File type should be: JPEG, JPG, and PNG.</label>
                                        <input name = "image" type="file" class="form-control-file">
                                        <span style = "color:red">@error( 'image' ){{ $message }} @enderror</span>
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1 mt-3">Categories</label>
                                        <div class="row">
                                        @foreach($data as $value)
                                            <div class="col-lg-6">
                                                <div class="form-check">
                                                    <input name = "categories" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                      {{ $value->name }}
                                                    </label>
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                            <span style = "color:red">@error( 'categories' ){{ $message }} @enderror</span>
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