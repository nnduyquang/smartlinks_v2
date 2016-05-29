<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laravel</title>
    {!! Html::style('public/css/bootstrap.min.css') !!} 
    {!! Html::style('public/css/menutop.css') !!}
    {!! Html::style('public/css/reset.css') !!}
    {!! Html::style('public/css/sliderMain.css') !!}
</head>

<body>
    {{-- Gắn menu, header--}}
    @include('menu.menutop')
    @include('slider.sliderMain')
    
    {{-- Gắn main contain--}}
    <div class="main-contain container">
        @yield('main-contain')
    </div>

    {!! Html::script('public/js/jquery-1.12.4.min.js') !!}
    <script>window.jQuery || document.write('<script src="http://localhost:8080/smartlinks_v2/public/js/jquery-1.12.4.min.js"><\/script>')</script>
    {!! Html::script('public/js/bootstrap.min.js') !!}
    {!! Html::script('public/js/modernizr.js') !!}
    {!! Html::script('public/js/sliderMain.js') !!}

</body>
</html>
