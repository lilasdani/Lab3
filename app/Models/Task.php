<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    // Relația cu modelul Category (O sarcină aparține unei categorii)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relația cu modelul Tag (O sarcină poate avea multe etichete)
    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'task_tag');
    }
}

