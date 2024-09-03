@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Sidebar for categories -->
        <div class="col-md-3">
            <h3>Categories</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{ route('home') }}">All</a>
                </li>
                @foreach ($categories as $category)
                    <li class="list-group-item">
                        <a href="{{ route('home', ['category_id' => $category->id]) }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Main content area -->
        <div class="col-md-6">
            <div class="card ">
                <div class="h-100">
                <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p>{{ $product->description }}</p>
                    <p>Starting Bid: ${{ $product->starting_bid }}</p>
                    <p>Highest Bid: ${{ $highestBid ?? 'No bids yet' }}</p>
                    <p>{{ $product->days_left }}</p>
                    <a href="#" class="btn btn-success">Place a Bid</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
