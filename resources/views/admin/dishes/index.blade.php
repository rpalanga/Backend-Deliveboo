@extends('layouts.app')

@section('content')

<div class="container">
    <ul class="py-5">
        @foreach ($dishes as $dish)
            {{-- <li>
                {{ $dish->img }}
            </li> --}}
            <li class="d-flex justify-content-between py-2">
                {{ $dish->name }}
                <a href="{{ route('admin.dishes.show', $dish) }}" class="btn btn-primary">Visualizza dettagli del piatto</a>
            </li>
            <hr>
            {{-- <li>
                {{ $dish->description }}
            </li>
            <li>
                {{ $dish->ingredients }}
            </li>
            <li>
                {{ $dish->is_visible? 'Disponibile' : 'Non disponibile' }}
            </li> --}}
        @endforeach
        
    </ul>
    <a class="btn btn-secondary" href="{{route('admin.dishes.create')}}">Inserisci un Nuovo Piatto</a>
</div>
    



@endsection