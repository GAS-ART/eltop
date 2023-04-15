@section('head')
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


 <!-- FAVICON https://favicon.io/favicon-converter/ -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png')}} ">


   <title>@yield('title')</title>
   <meta name="description" content="@yield('description')">

   <meta property="og:url" content="@yield('ogUrl')" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="@yield('ogTitle')" />
   <meta property="og:description" content="@yield('ogDescription')"/>
   <meta property="og:site_name" content="ruban-dentist.com.ua" />
 <!--  <meta property="og:image" content="{{ asset('img/avatar/3.jpg')}}"/> -->

 @vite(['resources/scss/style.scss', 'resources/js/app.js'])
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="{{asset('css/style.css') . '?_v=1'}}"> 

   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="{{asset('js/app.js')}}"></script>

   <!-- Global site tag (gtag.js) - Google Analytics -->

</head>