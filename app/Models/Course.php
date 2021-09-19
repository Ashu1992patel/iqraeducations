<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'category_id', 'image', 'price'
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }

    // Accessor for fetching a short description
    public function getShortDescriptionAttribute()
    {
        $description = Str::limit($this->description, 120, '...');
        return $description;
    }
}
