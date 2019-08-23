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
                <h1 class="justify-content-center display-1 m-0 pehlevi">Товары</h1>
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
        <p class="display-2 text-center pehlevi">Товары</p>

    </div>

    

@section('content')
 
    <br>
   
    <div class="container-fluid d-flex justify-content-center m-0 p-0 row">

       @foreach ($products as $item)
        <div class="col-md-3 col-sm-6 d-flex justify-content-center">
            <div class="card " style="width: 18rem; margin-bottom:20px;">
                <img class="card-img-top" src="{{$item->img}}" alt="Card image cap">
                <hr>
                <div class="card-body text-center pt-0">
                    <h5 class="card-title h2">{{$item->name}} <span class="badge badge-light">New</span></h5>
                    <hr>
                    <p class="lead">Цена: {{$item->price}}₽</p>
                    <hr>

                    <div class="container-fluid clearfix">
                       
                        <a href="/products/{{$item->id}}" class="btn btn-success float-left">Заказать</a>
                       
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#id{{$item->id}}">
                            Описание
                        </button>
                    
                    </div>
                   
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="id{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center " id="exampleModalLongTitle">{{$item->name}}</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{$item->description}}
                        <hr>
                        Cостав: {{$item->composition}}
                        <br>
                        Цена: {{$item->price}}₽
                    </div>
                    <div class="modal-footer">
                        <a href="/products/{{$item->id}}" class="btn btn-success float-left">Заказать</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        
                    </div>
                </div>
            </div>
        </div>


       @endforeach

    </div>

    <!-- Button trigger modal -->
    

    
    
        <div class="container-flud d-flex justify-content-center" style="height:50px;">
            {{$products->links()}}
        </div>
        
        <br>


        <div class="container d-none d-md-block" style="width:600px;">
            <img src="../img/ornament_a_top.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="container d-md-none">
            <img src="../img/ornament_a_top.png" class="img-fluid" alt="Responsive image">
        </div>



        <script>

        </script>
   
   
    
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

