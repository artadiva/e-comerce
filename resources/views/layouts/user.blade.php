



<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Shayna Template" />
    <meta name="keywords" content="Shayna, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title') - Klorofil 2020</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/css/star-rating.css" integrity="sha256-rxO5psSEDDwe/tXGWKVR6SvzTRs2dziG2JyrSDYu+T0=" crossorigin="anonymous" /> -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="/user/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="/user/css/style.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/js/star-rating.js" integrity="sha256-S2ORm6xw1RYkkprzbwG8OGd+to8onXXw7iR97CGsMvI=" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    {{-- Header --}}
    @include('layouts.includes._user_header')
    {{-- End Header --}}

    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}

    {{-- Footer --}}
    @include('layouts.includes._user_footer')
    {{-- End Footer --}}

    <!-- Js Plugins -->


</body>
<!-- <script>alert('haha')</script> -->
<script src="/user/js/jquery-3.3.1.min.js"></script>
<script src="/user/js/bootstrap.min.js"></script>
<script src="/user/js/jquery-ui.min.js"></script>
<script src="/user/js/jquery.countdown.min.js"></script>
<script src="/user/js/jquery.nice-select.min.js"></script>
<script src="/user/js/jquery.zoom.min.js"></script>
<script src="/user/js/jquery.dd.min.js"></script>
<script src="/user/js/jquery.slicknav.js"></script>
<script src="/user/js/owl.carousel.min.js"></script>
<script src="/user/js/main.js"></script>
</html>
