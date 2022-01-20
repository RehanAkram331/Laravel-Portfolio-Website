<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="J2K-awrLm--LtTSkUGmFsRpFFTU0W1V5PqZTQp0b6pg" />
    <meta name="description" content="Rehan Akram is an Expert Web Developer in Bangladesh. Expert Mobile App Developer in Bangladesh.He is highly talented, experienced, professional and cooperative software engineer, working in programming and web world for more than 1 years. Moreover Rehan Akram has a skilled team for achieving his goal named “Team Rehan”.Team Rehan assure you a wide range of quality IT services. ">
    <meta name="keywords" content="Expert Web Developer in Bangladesh, Expert Mobile App Developer in Bangladesh, Android App Developer in Bangladesh">
    <meta name="author" content="Rehan Akram">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">


</head>
<body>
    @extends('Layout.menu')



    @yield('content')



    @extends('Layout.footer')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/axios.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/typed.js') }}"></script>

    @yield('script')
</body>
</html>
