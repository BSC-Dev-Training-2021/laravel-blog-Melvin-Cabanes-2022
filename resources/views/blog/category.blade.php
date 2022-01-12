@extends('layouts.master')

@section('content')
@if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
<div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Category</h1>
                        </header>
                    </article>

                    <div class="form-group">
                        <form action="" method = "POST">
                            <input name = "insertCategory" class="form-control mb-1" placeholder = "Add category..."></input>
                            <button name = "submit" type="submit" class="btn btn-success ">Add</button>
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection