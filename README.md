# Ejercicio 10/10/2024

- Crear un modelo llamado Producto con el controlador llamado ProductController (o valor por defecto) y su migración
  - `sail php artisan make:model ....`
- En la migración añadir code como string
  - `databases/migrations`
  - ¡Ejecutar la migración! `sail php artisan migrate:fresh`
- Crear una vista products.index.blade.php
  - `sail php artisan make:view ...`
- Vincular la vista con el controlador
  - En la función `index` sería un buen sitio
  - ¡Recuerda vincularlo al fichero de rutas `web.php`! `Route::resource`...
- Mostrar todos los códigos de producto en la bista products.index.blade.php
  - Con un `foreach` en blade. ¡No olvides pasarle los productos en el controlador!

Opcionales:
- Crear un seeder y una factory para automatizar la creación de Productos


Avanzado:
- Crear un modelo Categoría
- Vincular el producto con la categoría (foreignIdFor(Category::class)->constrained()
