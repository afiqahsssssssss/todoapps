<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Homework Section</title>

<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jqueryui.min.js"></script>

@section('navbar')
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/">Task</a></li>
            <li><a href="/">Reminder</a></li>
            <li><a href="/homeworks">Homework</a></li>
            </ul>
        </div>
    </div>
@show
</head>

<body>
<div class="container">
@yield('main')
</div>
<script>
</script>

@section('footer')
    <div id="copyright">Copyright 2021 IIUM</div>
@show
</body>
</html>