<! DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Quckstart -Basic</title>
    {{--Fonts--}}
    <link href="https:://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    {{--Style--}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container">
        {{--navbar--}}
        <div class="navbar-header">
            <a href="{{url('/')}}" class="navbar-brand">
                Task List
            </a>
        </div>
    </div>
</nav>
@yield('content')
{{--JavaScript--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>