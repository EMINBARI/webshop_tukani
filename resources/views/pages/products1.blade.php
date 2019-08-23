@extends('layouts.app')

<p class="display-2 text-center">Товары</p>

@section('content')

   <br>
   
    <div class="container-fluid d-flex justify-content-center m-0 p-0 row">

       @foreach ($products as $item)
        <div class="col-md-3 col-sm-6 d-flex justify-content-center">
            <div class="card " style="width: 18rem; margin-bottom:20px;">
                <img class="card-img-top" src="{{$item->img}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">{{$item->description}}</p>
                    <a href="#" class="btn btn-primary">Переход куда-нибудь</a>
                </div>
            </div>
        </div>
       @endforeach
       
    </div>

    

@endsection