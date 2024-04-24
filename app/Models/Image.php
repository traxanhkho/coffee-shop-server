<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Image extends Model
{
    protected $fillable = ['path', 'imageable_id', 'imageable_type'];
    use HasFactory;

    /**
     * Get all of the owning commentable models. 
     */

    public function imageable()
    {
        return $this->morphTo();
    }
}
