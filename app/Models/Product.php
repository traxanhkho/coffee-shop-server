<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    // protected $fillable = ['user_id', 'name', 'description', 'price', 'imageUrl'];
    protected $fillable = ['user_id', 'name', 'description', 'price'];

    public $directory = '/images/';

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function types(): BelongsToMany
    {
        return $this->belongsToMany(Type::class, 'types_products');
    }

    public function getImageAttribute($image)
    {
        if (str_contains($image->imageUrl, 'http')) return $image;

        $image->imageUrl = $this->directory . $image->imageUrl;
        return $image;
    }
    public function deleteImageInStorage($path){
        
    
        if (Storage::disk('local')->exists("public/" . $path)) {
            Storage::disk('local')->delete("public/" . $path);
            /*
                Delete Multiple files this way
                Storage::delete(['upload/test.png', 'upload/test2.png']);
            */
        } else {
            dd('File does not exist.');
        }
    }
}
