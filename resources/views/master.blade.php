<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords"  content="" />
    <title>Laravel</title>
    {!! HTML::style('public/css/bootstrap.min.css') !!}

    {{-- Demo CSS MenuTop --}}

    {!! Html::style('public/css/menu/menutop.css') !!} 

    

    {{-- Demo CSS MenuTop2 

    {!! Html::style('public/css/menu/menutop2.css') !!} 

    --}}

    {{--

    {!! Html::style('public/css/reset.css') !!}
    {!! Html::style('public/css/sliderMain.css') !!}

    --}}

    {{-- Font Awesome--}} 
    {!! Html::style('public/font-awesome-4.6.3/css/font-awesome.min.css') !!}

    {{-- Demo CSS FullPage  

    {!! Html::style('public/css/fullpage/jquery.fullPage.css') !!}
    {!! Html::style('public/css/fullpage/fullpage.css') !!}
    {!! Html::style('public/css/fullpage/canho.css') !!}

    --}}  

    {{-- Demo CSS Sticky 

    {!! Html::style('public/css/sticky/sticky.css') !!}

    --}}

    {!! Html::script('public/js/jquery-1.12.4.min.js') !!}
    {!! Html::script('public/js/jquery-ui.min.js') !!}
    {!! Html::script('public/js/bootstrap.min.js') !!}
    {!! Html::script('public/js/modernizr.js') !!}

    {{--SMARTLINKS PROJECT--}}

    {{--CSS Smartlinks Project--}}

    {!! Html::style('public/css/smartlinks/styleSmartlinks.css') !!}

    {{--CSS LayerSlider Smartlinks Project--}}

    {!! Html::style('public/css/smartlinks/LayerSlider/layerslider.css') !!}

    {{-- Smartlinks JS LayerSlider --}}

    {!! Html::script('public/js/smartlinks/LayerSlider/greensock.js') !!}
    {!! Html::script('public/js/smartlinks/LayerSlider/layerslider.transitions.js') !!}
    {!! Html::script('public/js/smartlinks/LayerSlider/layerslider.kreaturamedia.jquery.js') !!}

    

    
</head>

<body>
    {{-- MENU AREA--}}

    {{-- Gắn menu 1 --}}

    @include('menu.menutop')

    
    {{-- Gắn menu 2 

    @include('menu.menutop2') 

    --}}

    {{-- SLIDER AREA --}}
    @include('slider.smartlinksSlider') 
    
    {{-- MAIN CONTENT AREA--}}

    <div class="main-contain">
        @yield('main-contain')
    </div>



    {{--

    {!! Html::script('public/js/sliderMain.js') !!}

    --}}

    {{-- Demo JS MenuTop2  --}}

    {!! Html::script('public/js/menu/menutop2.js') !!}

    

    {{-- Demo JS FullPage

    {!! Html::script('public/js/fullpage/scrolloverflow.min.js') !!}
    {!! Html::script('public/js/fullpage/jquery.fullPage.min.js') !!}
    {!! Html::script('public/js/fullpage/fullpage.js') !!}

    --}}

    {{-- Demo JS Sticky

    {!! Html::script('public/js/sticky/sticky.js') !!}

    --}}

    
    

</body>
</html>
