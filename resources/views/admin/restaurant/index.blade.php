@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h1 class="mb-2">Bentornato {{$user->name}}</h1>

    <div class="card mb-3">
      <img src="{{asset('storage/' . $restaurant->img)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$restaurant->name}}</h5>
        <p class="card-text">Descrizione:<br>{{$restaurant->description}}</p>
        <p class="card-text">Indirizzo:<br>{{$restaurant->address}}</p>
        <p class="card-text">P.Iva:<br>{{$restaurant->vat}}</p>
        <p class="card-text">Numero di Telefono:<br>{{$restaurant->phone_number}}</p>
        <a href="{{ route('admin.dishes.index') }}" class="btn btn-primary">Visualizza il tuo menu</a>
      </div>
    </div>

    
</div>
@endsection