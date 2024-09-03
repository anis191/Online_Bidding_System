@extends('layouts.app')

@section('content')
<div class="container">
<div class="py-4">
    <h3>Categories</h3>
    <div class="d-flex flex-row ">
        <a href="{{ route('home') }}" class="btn btn-primary mb-2">All</a>
        @foreach ($categories as $category)
            <a href="{{ route('home', ['category_id' => $category->id]) }}" class="btn btn-secondary mb-2 mx-2">
                {{ $category->name }}
            </a>
        @endforeach
    </div>
</div>


    <div class="row">
        <!-- Sidebar for categories -->
      


        <!-- Main content area -->
        <div class="col-md-9">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn btn-info">Start Bidding</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
