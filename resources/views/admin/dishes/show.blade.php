@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="card mb-3">
            <img src="{{asset('storage/' . $dish->img)}}" class="card-img-top" alt="immagine">
            <div class="card-body">
                <h5 class="card-title">Nome del piatto: {{ $dish->name }}</h5>
                <p class="card-text">Descrizione:<br>{{ $dish->description }}</p>
                <p class="card-text">Ingredienti:<br>{{ $dish->ingredients }}</p>
                <p class="card-text">Prezzo del piatto:<br>€ {{ $dish->price }}</p>
                <p class="card-text">Disponibilità del piatto:<br>{{ $dish->is_visible? 'Disponibile' : 'Non disponibile' }}</p>
            </div>
        </div>

        <!-- <a href="{{route('admin.dishes.edit', $dish)}}">Modifica Piatto</a> -->
        <div class="py-5">
            <a href="{{route('admin.dishes.edit', $dish)}}" class="btn btn-warning">Modifica</a>
                    
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>

            <a href="{{route('admin.dishes.index')}}" class="btn btn-primary">Torna ai tuoi piatti</a>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il piatto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Sei sicuro di voler eliminare il piatto? "{{$dish->name}}"
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('admin.dishes.destroy', $dish)}}" method="POST">
                        @csrf
                        @method("DELETE")

                        <button class="btn btn-danger">Elimina</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
    </div>
@endsection