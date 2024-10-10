<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', 'Mi ecommerce') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<table class="table">
    <thead>
    <tr>
        <th>
            Código
        </th>
        <th>Categoría</th>
        <th>
            Descripción
        </th>
        <th>
            Precio
        </th>
    </tr>
    </thead>
    @foreach($products as $product)
        <tr >
            <td>
                {{ $product->code }}
            </td>
            <td>
                {{ $product->category->code }}
            </td>
            <td>
                {{ $product->description }}
            </td>
            <td  @if($product->price > 3) style="background: green" @endif>
                {{ $product->price }}
            </td>
        </tr>
    @endforeach

</table>

<ul>
@foreach($categories as $category)
<li>
    {{ $category->code }}
    <ol>
        @foreach($category->products as $product)
            <li>
                {{ $product->code }}
            </li>
        @endforeach
    </ol>
</li>
@endforeach

{{--    @if(now()->isAfter(now()->addDay()))--}}
{{--        <div>Hoy es antes que mañana</div>--}}
{{--    @else--}}
{{--        <div>No! Hoy es antes que mañana</div>--}}
{{--    @endif--}}
</ul>
</body>
</html>
