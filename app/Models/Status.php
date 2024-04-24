<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Status extends Model
{
    use HasFactory;

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'orders_statuses');
    }
}
