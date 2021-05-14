<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/custom.css')}}">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet"> 

</head>
<body>
@include('layout.menu')

@yield('content')


@include('layout.footer')
</body>



</html>