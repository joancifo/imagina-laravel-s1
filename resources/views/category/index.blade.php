<div>
    @foreach($categories as $category)
        <div>
            {{ $category->code }}

            <ul>
{{--            @forelse($category->products()->where('active', true)->get() as $product)--}}
{{--            @forelse($category->activeProducts as $product)--}}
            @forelse($category->products()->active()->get() as $product)
                <li>{{ $product->description }}</li>
            @empty
                ¡No hay productos para la categoría {{ $category->code }}!
            @endforelse
            </ul>
        </div>
    @endforeach
</div>
