<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('_parts.meta')
    <meta name="description" content="@yield('description')">

    <title>@yield('title') | {{ config('APP.NAME', 'お問い合わせ') }}</title>

    @include('_parts.css')

    @yield('css')
    @include('_parts.js_header')
    @yield('js_header')
</head>

<body>

@include('_parts.navbar')

<div class="container">
@yield('content')
</div>

@include('_parts.js_footer')
@yield('js_footer')

</body>
</html>
