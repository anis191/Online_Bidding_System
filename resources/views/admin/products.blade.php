<!-- resources/views/products/index.blade.php -->

<h1>Products</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Category</th>
            <th>Starting Bid</th>
            <th>Start Price</th>
            <th>Bid Expiry</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td><img src="{{ asset('images/' . $product->image) }}" width="50" height="50"></td>
                <td>{{ Str::limit($product->description, 50) }}</td>
                <td>{{ $product->category_name }}</td>
                <td>{{ $product->starting_bid }}</td>
                <td>{{ $product->start_price }}</td>
                <td>{{ $product->bid_expiry }}</td>
                <td>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>