@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-sm-6 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <h4>{{ number_format($product->price) }} تومان</h4>
                            <a href="{{ route('order.index', $product->id) }}" class="btn btn-primary">خرید</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

