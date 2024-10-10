<?php

namespace App\Models;

use App\Traits\IsActivable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    use IsActivable;
    use SoftDeletes;

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

    protected $appends = ['doublePrice'];

    protected static function booted()
    {
        static::addGlobalScope('is_active', function ($query) {
            return $query->where('active', true);
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getDescriptionAttribute()
    {
        return Str::upper($this->attributes['description']);
    }

    public function getDoublePriceAttribute()
    {
        return $this->price * 2;
    }

}
