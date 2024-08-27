<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    
</head>
<body>
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <img src="{{ asset('images/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
        <p>{{ $product->description }}</p>
        <p>Starting Bid: ${{ $product->starting_bid }}</p>
        <p>Start Price: ${{ $product->start_price }}</p>
        <p>Bid Expiry: {{ $product->bid_expiry }}</p>
        <p>{{ $product->days_left }}</p>
        @if($product->highest_bid !== null)
            <p>Highest Bid: ${{ $product->highest_bid }}</p>
        @else
            <p>No bids yet</p>
        @endif

        <!-- Bid Form -->
        <form action="#" method="POST" class="mt-4">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="form-group">
                <label for="bid_amount">Place your bid:</label>
                <input type="number" name="bid_amount" id="bid_amount" class="form-control" min="{{ $product->starting_bid }}" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Bid</button>
        </form>

        <a href="{{ route('products.indexforuser') }}" class="btn btn-secondary mt-2">Back to Products</a>
    </div>

 
</body>
</html>
