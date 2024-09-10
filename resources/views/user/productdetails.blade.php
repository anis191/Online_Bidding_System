@extends('layouts.app')

@section('content')
<div class="container">
<a class="btn btn-primary mb-3" href="{{ route('home') }}">Home</a>
    <div class="row shadow p-3">
        <!-- Sidebar for categories -->
        <div class="col-md-4">
            <h3> Categories</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <a class="nav-link fw-bold" href="{{ route('home') }}">All</a>
                </li>
                @foreach ($categories as $category)
                    <li class="list-group-item">
                        <a class="nav-link mb-2 mx-2" href="{{ route('home', ['category_id' => $category->id]) }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Main content area -->
        <div class="col-md-6">
            <div class="card">
                <div class="h-100">
                    <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                    <p>{{ $product->description }}</p>
                    <h4 class="text-success">Starting Bid: ${{ $product->starting_bid }}</h4>
                    <p class="text-success">Highest Bid: ${{ $product->highest_bid ?? 'No bids yet' }}</p>
                    <p>{{ $product->days_left }}</p>

                    @if ($product->days_left !== 'Expired')

                        <!-- Success message -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Error message -->
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Validation errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <!-- Bid form -->
                        <form action="{{ route('bid.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                            <!-- Bid amount input -->
                            <div class="form-group">
                                <label for="bid_amount">Your Bid:</label>
                                <input type="number" name="bid_amount" id="bid_amount" class="form-control" min="0.01" step="0.01" placeholder="Enter your bid" required>
                            </div>
                            
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-success mt-3">Place a Bid</button>
                        </form>
                    @else
                        <p class="text-danger">This auction has expired. No more bids can be placed.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
