<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'category_id',
        'is_published',
    ];
    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
