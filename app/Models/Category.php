<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Mengganti default key-nya menjadi 'slug' sehingga bisa digunakan di resource
    // default keynya adaalah 'id'
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Membuat Slug dari lib eloquent sluggable
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
