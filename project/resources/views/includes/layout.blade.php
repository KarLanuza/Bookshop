<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.header')
<div class="container">
    
    <div id="main" class="row" style="padding:50px 0px;">

            @yield('content')

    </div>
</div>
@include('includes.footer')
@include('includes.scripts')  
</body>
</html>