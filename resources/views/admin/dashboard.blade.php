@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard utente') }}</div>

                <div class="card-body d-flex flex-column align-items-start gap-3">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Bentornato') }}
                    <a href="{{route('admin.restaurant.index')}}" class="btn btn-primary">Vai al tuo ristorante</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
