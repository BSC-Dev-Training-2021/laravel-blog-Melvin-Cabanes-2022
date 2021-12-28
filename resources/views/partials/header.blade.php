<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">My Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('blog.about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('blog.contact') }}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('blog.post') }}">Post</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('blog.messages') }}"><i class="fa fa-envelope-o"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>