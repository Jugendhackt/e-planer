<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0D47A1;">
    <a class="navbar-brand" href="/">EPlaner</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Homework</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Course</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lesson</a>
            </li>
        </ul>
        {{--@if()--}}
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin') }}">Admin</a>
            </li>
        </ul>
        {{--@endif--}}
    </div>
</nav>