@extends('layouts.master')

@section('content')
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on {{ $articleData->created_at->format('M, d Y H:i:s A'); }}</div>
                            <!-- Post categories-->

                        @foreach($showCategory as $value)
                            <a class="badge bg-secondary text-decoration-none text-light" href="#">{{ $value->name }}</a>
                        @endforeach

                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src=" /images/{{ $articleData->image }}" alt="..." /></figure>
                        <!-- Post content-->
                            <section class="mb-5">
                                <p class="fs-5 mb-4">{{ $articleData->content }}</p>
                            </section>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                            
                                <form class="mb-4" action = " {{ route('blog.article') }} " method = "POST">
                                    <div>
                                        <textarea name = "comment" class="form-control mb-2" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                                        <input name = "hidden" type="hidden" value = "{{ $articleData->id }}">
                                    </div>
                                    {{ csrf_field() }}
                                    <div>
                                        <button name = "postComment" type="submit" class="btn btn-primary">Post Comment</button>
                                    </div>
                                </form>

                                <!-- Comment with nested comments-->
                            @foreach($getComments as $value)
                                <div class="d-flex mb-4">
                                    <!-- Parent comment--> 
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        {{$value->comment}}
                                        <!-- Child comment 1-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </section>
                </div>
@endsection