<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>       
    </head>
    <body>
        <div class="main-wrapper">
            <div class="main-wrapper-header">
			{{--Nhúng header menu, logo,..--}}
			Đây là header
			</div>
			<div class="main-contain">
				@yield('main-contain')
			</div>
        </div>
    </body>
</html>
