<div>
    @foreach($categories as $category)
        <div>
            {{ $category->code }}

            <ul>
            @forelse($category->products as $product)
                <li>{{ $product->code }}</li>
            @empty
                ¡No hay productos para la categoría {{ $category->code }}!
            @endforelse
            </ul>
        </div>
    @endforeach
</div>
