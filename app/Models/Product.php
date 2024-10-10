<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

//    public $fillable = [
//        'code',
//        'price',
//        'description'
//    ];

//    public $primaryKey = 'identificador';
//    public $connection = 'sqlite';
//public $incrementing = false;
//public $timestamps = false;

    public $guarded = [
        'id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
