@extends('layouts.app')

    <div class="d-none d-md-block">
        <br>
            <div class="d-flex justify-content-center row">
                <div class="col-md-4 text-center">
                    <img src="../img/ornament_d.png" class="img-fluid ml-md-2" alt="Responsive image">
                </div>
                <div class="col-md-4 justify-content-center text-center p-0 d-md-none">
                    <h1 class="justify-content-center display-2 m-0"><span class="pehlevi">О нас<span></h1>
                </div>
                <div class="col-md-4 justify-content-center text-center p-0 d-none d-md-block">
                    <h1 class="justify-content-center display-1 m-0"><span class="pehlevi">О нас<span></h1>
                </div>
                <div class="col-md-4 text-center">
                    <img src="../img/ornament_d.png" class="img-fluid mr-md-2" alt="Responsive image">
                </div>
            </div>
        <br>
    </div>

    <div class="d-md-none">
        <img src="../img/ornament_a_half.png" class="img-fluid ml-md-4" alt="Responsive image">
        <p class="display-2 text-center pehlevi">О нас</p>
    </div>
    
    @section('content')


    <div class="container d-none d-md-block" style="width:500px;">
        <img src="../img/ornament_a_half.png" class="img-fluid" alt="Responsive image">
    </div>
    <br>
    <div class="container-fluid">
    
    <br>
    <p class="lead">
        Все наши товары являются образцом качества. Мы находимся на рынке уже 6 лет, наши товары продаются в таких городах как: Симферополь, ... <br>

    </p>
    <p class="lead">
        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
    </p>
    <br>
    <dl class="row">
        <dt class="col-sm-3">Контактный телефон</dt>
        <dd class="col-sm-9">+7 978 000 00 00</dd>

        <dt class="col-sm-3">Адрес электронной почты</dt>
        <dd class="col-sm-9">
            web.tukanrr@gmail.com
        </dd>

        <dt class="col-sm-3">ИНН</dt>
        <dd class="col-sm-9">910403359403</dd>

        <dt class="col-sm-3 text-truncate">ОГРНИП</dt>
        <dd class="col-sm-9">315910200268412</dd>

        <dt class="col-sm-3">Nesting</dt>
        <dd class="col-sm-9">
            <dl class="row">
            <dt class="col-sm-4">Nested definition list</dt>
            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
            </dl>
        </dd>
    </dl>
    <br>
    <div id="loader" style="height:500px; posisition:relative; justify-content: center; display: flex; align-items: center;">
        
    </div>
   

    <script type="text/javascript">
        $(document).ready(function(){
            $("#loader").empty();
            $("#loader").html('<div id="load" style="position:absolute; height: 400px;display: flex; justify-content: center; align-items: center;" class="element d-flex container-fluid justify-content-center"><div class="loading3"><div></div><div></div><div></div><div></div><div></div></div></div>');
            
            var iframe = document.createElement('iframe');
            iframe.onload = function() { 
                //alert('myframe is loaded'); 
                $("#load").remove();
            }; // before setting 'src'
            iframe.src = 'https://yandex.ru/map-widget/v1/?um=constructor%3A45e2696ddc3f65dcb74a726ee124f285c12dc783c4a39ccd7dd0fefaa3321df4&amp;source=constructor';
            $(iframe).css({"width": "100%", "height": "500px", "border":"none","poition":"absolute"});
            $("#loader").append(iframe); 

       });
    </script>

</div>

    <style>
        @font-face {
            font-family: "pehlevi"; /* Гарнитура шрифта */
            src: url(../fonts/pehlevi.ttf) format("truetype"); /* Для остальных браузеров */
        }
        .pehlevi{
            font-family: "pehlevi";
        }
    </style>
@endsection 