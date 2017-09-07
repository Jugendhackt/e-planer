<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials._head')
</head>

<body>

@include('partials._messages')

@include('partials._nav')

<!-- Main Container -->
<div class="container">

    @yield('content')

</div>

@include('partials._js')

</body>
</html>