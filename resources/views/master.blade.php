<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    {!! Html::style('public/css/bootstrap.min.css') !!} 
    {!! Html::style('public/css/bootstrap-theme.min.css') !!} 
    {!! Html::style('public/css/menutop.css') !!}
    {!! Html::script('public/js/jquery-1.12.4.min.js') !!}
    {!! Html::script('public/js/bootstrap.min.js') !!}
    {!! Html::script('public/js/menutop.js') !!}
</head>
<body>
    <div class="main-wrapper">
        <div class="main-wrapper-header">
           {{--Nhúng header menu, logo,..--}}
           @include('menu.menutop')

    </div>
    <div class="main-contain">
        @yield('main-contain')
    </div>
</div>

</body>
</html>
