<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title-page")</title>
    @include('partials.head-script')
</head>
<body>
    @include('partials.the_header')

    @yield('main_content')

    @include('partials.the_footer')
</body>
</html>