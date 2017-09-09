<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials._head')
</head>

<body>

@include('partials._nav')

@include('partials._messages')

<!-- Main Container -->
<div class="container">

    @yield('content')

</div>

@include('partials._js')

</body>
</html>