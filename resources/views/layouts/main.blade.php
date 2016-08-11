<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
<div class="wrapper">
    @yield('header')

    <div class="header">
        <img id="header" src="{{URL::to('img/header.png')}}" alt="">
        <img id="logo" src="{{URL::to('img/logo.png')}}" alt="logo">
        <img id="info" src="{{URL::to('img/info.png')}}" alt="info">
        <div class="menutop">
            <ul>
                <li><a href="">О нас</a></li>
                <li><a href="">Прайс лист</a></li>
                <li><a href="">Новости</a></li>
            </ul>
        </div>

    </div>
    <div class="leftmenu">
        @yield('leftmenu')
        <img src="{{URL::to('img/leftmenu.png')}}" alt="">
        <ul>
            <li><a href="555">ddd</a></li>
        </ul>
    </div>

    <div class="content">
        @yield('content')
    </div>

    @yield('script')
</div>
</body>
</html>