<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{config('app.name', 'Project')}}</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        <!-- for ajax -->


        <meta name="csrf-token" content="{{csrf_token()}}">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body >
        <div class="container-fluid p-md-0">
            <div id="app">
                <br>
                <div class="d-flex justify-content-center row">
                    <div class="col-md-4 text-center">
                        <img src="../img/ornament_d.png" class="img-fluid ml-md-2 d-none d-md-block" alt="Responsive image">
                    </div>
                    <div class="col-md-4 justify-content-center text-center p-0 d-md-none">
                        <h1 class="justify-content-center display-4 m-0">Web<span class="pehlevi"> - Tükan<span></h1>
                    </div>
                    <div class="col-md-4 justify-content-center text-center p-0 d-none d-md-block">
                        <h1 class="justify-content-center display-2 m-0">Web<span class="pehlevi"> - Tükan<span></h1>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="../img/ornament_d.png" class="img-fluid mr-md-2" alt="Responsive image">
                    </div>
                </div>
                <br>
                
                <main class="">
                    @include('inc.navbar')
                </main>
        

            </div>
            <br>
            <div class="jumbotron container">
                <h1 class="display-5">Добро пожаловать!</h1>
                <p class="lead">У нас вы можете заказать товары народного производства</p>
                <hr class="my-4">
                <p>Все наши товары изготовлены из экологически чистых материалов, а так же имею сертификаты качества</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
           
            <div class="container justify-content-center border border-secondary rounded">
                <h1 class="text-center text-justify font-weight-light m-0">Популярные<br> товары</h1>
            </div>

        </div>
        <hr>

        <div class="fixed-bottom d-flex justify-content-between mr-3 p-2" style="top:87%;">
			<a href="tel:+79780108477" class="btn btn-success btn-circle d-md-none">
				<img src="../img/icons8-phone-30.png" alt="">
            </a>
            <a href="mailto:eminskiper99@gmail.com" class="btn btn-warning btn-circle">
				<img src="https://img.icons8.com/ios/30/000000/secured-letter.png">
			</a>
        </div>
        
        <div class="row bg-light">
            <div class="col-md-4 col-xs-12 d-flex text-center justify-content-center ">
                <br>
                <ul class="list-unstyled ">
                    <br>
                    <li><a class="btn btn-light" href="/">Главная</a></li>
                    <li><a class="btn btn-light" href="/products">Товары</a></li>
                    <li ><a class="btn btn-light" href="/about">О нас</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-xs-8 d-flex justify-content-center align-items-center text-dark">
                <div>
                    <br>
                    <p>Контактная информация:</p>
                    <p>Почта: ramazanov@gmail.com</p>
                    <p>Телефон: +79780000000</p>
                </div>
            </div>

            <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                <p>&copy Emin Bari 2019</p><br>
            </div>

        </div>
        <hr>
        <div class="container-fluid text-center">
            <p class="m-0 text-muted">Сайт носит сугубо информационный характер и не является публичной офертой, определяемой Статьей 437 (2) ГК РФ.</p>

        </div>

        <style>

            .btn-circle {
				width: 60px;
				height: 60px;
				padding: 12px 0px;
				border-radius: 30px;
				text-align: center;
				font-size: 12px;
				line-height: 1.42857;
			}

            @font-face {
                font-family: "pehlevi"; /* Гарнитура шрифта */
                src: url(../fonts/pehlevi.ttf) format("truetype"); /* Для остальных браузеров */
            }
            .pehlevi{
                font-family: "pehlevi";
            }


        </style>
    </body>
</html>
