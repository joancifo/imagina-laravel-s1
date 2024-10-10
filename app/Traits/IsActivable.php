<?php

namespace App\Traits;

trait IsActivable
{
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
