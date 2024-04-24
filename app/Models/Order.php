<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Order extends Model
{
    use HasFactory;
    use Sortable;

    public $fillable = [
        'user_id',
        'number_phone',
        'address',
        'created_at',
    ];

    public $sortable = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsToMany(Status::class, 'orders_statuses');
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'orders_items');
    }
}
