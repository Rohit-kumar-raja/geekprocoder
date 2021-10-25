<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">

        <b> <a class="navbar-brand" href="{{route('home')}}"> Geek Pro Coder</a></b>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('courses')}}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('videos')}}">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
