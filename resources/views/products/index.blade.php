<div>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <input type="text" name="description">
        <input type="text" name="code">
        <input type="number" step="0.01" name="price">
        <input type="submit">
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @foreach($products as $product)
        <div>
            {{ $product->description }} |||| {{$product->price}} |||| {{ $product->doublePrice }}€
        </div>
    @endforeach
</div>
