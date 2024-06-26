<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    use HasFactory;
    protected $fillable = [
        "nom",
        "parent_id",
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

}