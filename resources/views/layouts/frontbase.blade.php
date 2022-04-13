<html lang="">
<head>
    <title>Home Sale@yield('title')</title>
    @yield('head')
</head>
<body>
<h1>homa sale </h1>
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
