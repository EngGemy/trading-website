<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <script src="{{ asset('assets/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" lang="ar" content="تعرف على الشركات المرخصة دوليًا وابدأ التداول مع الشركات الرصينة وتجنب التداول مع الشركات غير الموثوقة - تداول، شركات مرخصة، شركات تداول، شركات موثوفة">
    <meta name="description" lang="ar" content="اختر نفسك وابدأ التداول مع الشركات المرخصة والموثوقة دوليًا وتجنب التعامل مع الشركات غير الموثوقة - تداول، شركات مرخصة، شركات تداول، شركات موثوقة">

    <meta name="title" lang="en" content="Get to know internationally licensed companies and start trading with reliable and licensed companies, and avoid trading with unreliable companies - trading, licensed companies, trading companies, reliable companies">
    <meta name="description" lang="en" content="Choose yourself and start trading with licensed and reliable companies and avoid trading with unreliable companies - trading, licensed companies, trading companies, reliable companies">
    <meta name="generator" content="Hugo 0.112.5">
    <title>@yield('title', 'Default Title')</title>

    <link rel="canonical" href="{{ url()->current() }}">
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/style.css') }}">
</head>
<body>
<!-- Your layout content goes here -->
@yield('nav')

@yield('header')

@yield('carousel')

@yield('content')

@yield('footer')


<script src="{{ asset('your-script.js') }}"></script>
<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
<script>
    const navbar = document.querySelector('.firstNav');
    const burger = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    burger.addEventListener('click', () => {
        navbar.classList.toggle('nav-active');
        burger.classList.toggle('toggle');
    });
</script>
</body>
</html>


