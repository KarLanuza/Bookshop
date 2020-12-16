<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.header')
<div class="container">
    <div id="main" class="row" style="margin-top:50px;">

            @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
@include('includes.scripts')  
</body>
</html>