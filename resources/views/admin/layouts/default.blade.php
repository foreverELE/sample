<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

@include('admin.layouts._header')
<div class="container">
    @include('admin.shared._messages')
    @yield('content')
    @include('admin.layouts._footer')
</div>
</body>
</html>