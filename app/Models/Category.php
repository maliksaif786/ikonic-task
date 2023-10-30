<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($category) {
            $category->feedback()->delete();
        });
    }
}
