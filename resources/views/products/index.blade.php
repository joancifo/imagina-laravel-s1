<div>
    @foreach($products as $product)
        <div>
            {{ $product->description }} |||| {{$product->price}} |||| {{ $product->doublePrice }}€
        </div>
    @endforeach
</div>
