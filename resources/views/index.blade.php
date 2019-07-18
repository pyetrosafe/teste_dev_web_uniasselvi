@extends('layouts.app')

@section('content')

    <div class="card mb-3 border-0 shadow-sm">
        <div class="card-header card-header-master border-0">
            <h4 class="mb-0">As Melhores Ofertas</h4>
        </div>
    </div>

    <div class="card-deck b-3 text-center">
        @foreach($produtos as $item)
        <div class="card mb-4" style="width: 18rem;">
            <img class="card-img-top h--100" tyle="max-width: 100% flex-shrink: 0;" src="{{ Storage::url($item->imagem) }}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{ str_limit($item->nome, 50) }}</p>
            </div>
            <div class="card-footer">
                <h5 class="card-title pricing-card-title text-danger">R$ {{ number_format($item->valor, 2, ',', '.') }}</h5>
                <a href="{{ url('/').'/carrinho/'.$item->id  }}" type="button" class="btn btn-lg btn-block btn-primary">Comprar</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection