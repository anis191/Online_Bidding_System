<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Sidebar for categories -->
            <div class="col-md-3">
                <h3>Categories</h3>
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('products.indexforuser') }}">All</a></li>
                    @foreach ($categories as $category)
                        <li class="list-group-item">
                            <a href="{{ route('products.indexforuser', ['category_id' => $category->id]) }}">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Main content area -->
            <div class="col-md-9">
                <form action="{{ route('products.search') }}" method="GET" class="mb-3">
                    <div class="input-group">
                        <input type="text" name="name" class="form-control" placeholder="Search for products...">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn btn-info">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
