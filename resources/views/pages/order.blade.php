@extends('layouts.app')

<!--visible only on laptops-->
    <div class="d-none d-md-block">
        <br>
        <br>
        <div class="d-flex justify-content-center row" style="width:100%">
            <div class="col-md-4 text-center">
                <img src="../img/ornament_a.png" class="img-fluid ml-md-4 " alt="Responsive image">
            </div>
            <div class="col-md-4 justify-content-center text-center p-0 d-flex align-items-center">
                <h1 class="justify-content-center display-1 m-0 pehlevi">Заказать</h1>
            </div>
            <div class="col-md-4 text-center">
                <img src="../img/ornament_a.png" class="img-fluid mr-md-4 p-sm-0" alt="Responsive image">
            </div>
        </div>
        <br>
    </div>
        
   
    <!--visivle on phones-->
    <div class="d-md-none">
        <img src="../img/ornament_a_half.png" class="img-fluid ml-md-4 " alt="Responsive image">
        <p class="display-4 text-center pehlevi">Заказать</p>

    </div>

    

@section('content')
    <br>
   
    <div class="container" id="product-info">
        <div class="form-group justify-content-center">
            <div class="form-group">
                        
                <p class="h3 align-middle text-center">Вы выбрали этот товар:</p>
                        <!-- 
                            <label for="inputState">Наименование товара</label>
                            <select id="inputState" class="form-control">
                                <option selected>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            -->
            </div>
            <hr>
            <div class="form-row">
                <div class="d-flex justify-content-center col-md-4 border-right">
                    <img src="{{$product->img}}" alt="..." width="150px" id="product_image" class="img-thumbnail">
                </div>
                <div class="d-flex justify-content-center align-items-center col-md-3 border-right row">
                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                        <span class="h3" id="product-name">{{$product->name}}</span>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                        <p>Цена: <span class="price">{{$product->price}}</span>/шт.</p>               
                    </div>
                </div>
                <div class="d-flex align-items-center col-md-3 justify-content-center">
                   <div class="form-group">
                        <label>Количество товара</label>
                        <div class="border rounded d-flex justify-content-between p-1 align-items-center" style="width:200px;">
                            <a class="text-light btn btn-primary" id="minus" style="width:40px">-</a>
                            <span class="" id="p"> 1 </span>
                            <a class="text-light btn btn-primary" id="plus"  style="width:40px">+</a>
                        </div>
                    </div>
                </div> 
                <br class="d-md-none"> 
                <br class="d-md-none">
                <br class="d-md-none">
                <div class="d-flex align-items-center col-md-2 justify-content-center">
                    
                    <p class="m-0">Цена: <span class="totalprice">{{$product->price}}</span></p>                         
                </div>  
                       
            </div>
            <hr>

        </div>
    </div>

   
   <div class="container" id="order-form">

        <br>
        <p class="h2 text-center">Чтобы закзать товар заполните форму ниже ↓</p>
        <br>
       
        <form action="javascript:void(0)" method="post">
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="customerName">Имя</label>
                    <input type="text" class="form-control" id="customerName" placeholder="Имя">
                    <div class="invalid-feedback" id="#name-invalid-feedback">
                        Некорректное значение
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="customerSurname">Фамилия</label>
                    <input type="text" class="form-control" id="customerSurname" placeholder="Фамилия">
                    <div class="invalid-feedback" id="#surname-invalid-feedback">
                        Некорректное значение
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label for="emailAddress">Адрес вашей электронной почты</label>
                <input type="email" class="form-control" id="emailAddress" placeholder="email@gmail.com" >
                <div class="invalid-feedback" id="#email-invalid-feedback">
                    Некорректное значение
                </div>
            </div>

            <div class="form-group">
                <label for="phoneNumber">Контактный номер</label>
                <input type="text" class="form-control" id="phoneNumber" placeholder="+7 XXX XXXXXXX" >
                <div class="invalid-feedback" id="#phone-invalid-feedback">
                    Некорректное значение
                </div>
            </div>

            <div class="form-group">
                <label for="city">Город</label>
                <input type="text" class="form-control" id="city" placeholder="город">
            </div>


            <div class="form-group d-flex justify-content-center">
                <a id="btn_send" class="btn btn-success text-light">Отправить</a>
            </div>

            <div id="success"></div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
        <hr>
    </div>

    <div class="container-fluid d-flex justify-content-center align-items-center row p-0 m-0" id="order-sending-result">
        <div class="col-md-12 d-flex justify-content-center align-items-center">

            <p class="h1 text-center" id="result"></p><br>
            <div id="loader" style="posisition:relative; justify-content: center; display: flex; align-items: center;">
            </div>


        </div>
        <div class="col-md-12 d-flex justify-content-center align-items-center">
            <a href="/products" class="btn btn-primary">← Назад</a>
        </div>
        
    </div>
<br>

    <script src="../js/products_sending.js"></script>
    
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

