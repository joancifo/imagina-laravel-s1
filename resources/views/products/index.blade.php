<div>
    @foreach($products as $product)
        <div>
            {{ $product->description }}
        </div>
    @endforeach
</div>
