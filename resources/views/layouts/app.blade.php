<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap grid css -->
    <link rel="stylesheet" href="css/plugins/bootstrap-grid.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="css/plugins/swiper.min.css">
    <!-- itsulu css -->
    {{--
    <link rel="stylesheet" href="css/style.css"> --}}
    @vite(['resources/js/app.js'])

    @vite(['resources/scss/style.scss'])

    <title>AICTECH Solutions</title>
</head>

<body>
    <!-- Header  -->
    @include('partials.header')

    <!-- Content  -->
    <div id="app">
        @yield('content')
    </div>

    <!-- Footer  -->
    @include('partials.footer')

    <!-- jQuery js -->
    <script src="js/plugins/jquery.min.js"></script>
    <!-- swiper js -->
    <script src="js/plugins/swiper.min.js"></script>
    <!-- itsulu js -->
    <script src="js/main.js"></script>
    <script src="js/forms.js"></script>
</body>

</html>