
<html lang="">
    <head>
        <title>App Name - @yield('title')</title>
        @yield('head')
</head>
<body>

<h1>header</h1>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
<h1>footer</h1>
@yield('foot')
</body>
</html>
