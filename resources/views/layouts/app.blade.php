<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{config('app.name', 'Project')}}</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

        

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        <!-- for ajax -->
		
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
        <!-- Fonts -->
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" href="{{asset('css/loader.css')}}">
    </head>
    <body>
        <div id="app">
    
            <main class="">
				
			
                @include('inc.navbar')

                <div class="container-fluid p-0 m-0">
					
					@yield('content')
					
                </div>
            
            </main>
      
		</div>
		
		<div class="fixed-bottom d-flex justify-content-between mr-3 p-2" style="top:87%;">
			<a href="tel:+79780108477" class="btn btn-success btn-circle d-md-none">
				<img src="../img/icons8-phone-30.png" alt="">
            </a>
            <a href="mailto:web.tukanrr@gmail.com" class="btn btn-warning btn-circle">
				<img src="https://img.icons8.com/ios/30/000000/secured-letter.png">
			</a>
        </div>


		<hr class="m-0">
		<div class="row">
			<div class="col-md-4 col-xs-12 d-flex text-center justify-content-center">
				<br>
				<ul class="list-unstyled ">
					<br>
					<li><a class="btn btn-light" href="/">Главная</a></li>
					<li><a class="btn btn-light" href="/products">Товары</a></li>
					<li ><a class="btn btn-light" href="/about">О нас</a></li>
				</ul>
			</div>

			<div class="col-md-4 col-xs-8 d-flex justify-content-center align-items-center">
				<div>
					<br>
					<p>Контактная информация:</p>
					<p>Почта: ramazanov@gmail.com</p>
					<p>Телефон: +79780000000</p>
				</div>
			</div>

			<div class="col-md-4 text-center d-flex justify-content-center align-items-center">
				<p>&copy Emin Bari 2019</p>
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


			.image-effect-circle{
				width: 100%;
				height: 200px;
				overflow: hidden;
				position: relative;
				margin: 0 auto;
				background-color: rgba(0,0,0,0.2);
			}


			.image-effect-circle .share-layer{
				width: 10%;
				height: 10%;
				border-radius: 50%;
				left:45%;
				top:400px;
				padding-top: 100px;
				position: absolute;
				background-color: none;
				-webkit-transition: 0.4s 1s;
				transition: 0.4s 1s;
				z-index: 1;
			}

			.image-effect-circle:hover .share-layer{
				-webkit-transition-delay: 0s;
				transition-delay: 0s;
				transform: translateY(-350px);
				-webkit-transform: translateY(-350px);
			}


			.image-effect-circle .share-button {
				position: absolute;
				display: block;
				width: 60px;
				height: 60px;
				border-radius: 50%;

				text-decoration: none;
				color: #ffffff;
				line-height: 70px;
				font-size: 32px;
				text-align: center;

				left: 50%;
				margin-left: -25px;
				top: 50%;
				margin-top: -25px;
				opacity: 0;
			}

			.image-effect-circle .share-via-facebook{
				-webkit-transition: 0.4s 0.6s;
				transition: 0.4s 0.6s;
				background-color:#3b5998;
			}

			.image-effect-circle .share-via-twitter{
				-webkit-transition: 0.4s 0.4s;
				transition: 0.4s 0.4s;
				background-color:#00aced;
			}

			.image-effect-circle .share-via-google{
				-webkit-transition: 0.4s 0.2s;
				transition: 0.4s 0.2s;
				background-color:#d34836;
			}

			.image-effect-circle:hover .share-via-facebook {
				-webkit-transition: 0.4s 0.4s;
				transition: 0.4s 0.4s;

				-webkit-transform: translate(-40px, -30px);
				transform: translate(-40px, -30px);

				opacity: 1;
			}

			.image-effect-circle:hover .share-via-twitter {
				-webkit-transition: 0.4s 0.6s;
				transition: 0.4s 0.6s;

				-webkit-transform: translate(40px, -30px);
				transform: translate(40px, -30px);

				opacity: 1;
			}

			.image-effect-circle:hover .share-via-google {
				-webkit-transition: 0.4s 0.8s;
				transition: 0.4s 0.8s;

				-webkit-transform: translate(0, 30px);
				transform: translate(0, 30px);

				opacity: 1;
			}

		</style>


    </body>
</html>
