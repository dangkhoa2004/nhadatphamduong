<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'images',
        'content',
        'link',
        'code',
        'info',
        'document_type',
        'area_mb',
        'area_sd',
        'width',
        'length',
        'floors',
        'bedrooms',
        'bathrooms',
        'price',
        'direction',
        'feng_shui_direction',
        'location',
        'posted_at'
    ];

    // If you want to cast certain fields to a specific type (e.g., dates), you can add the following:
    protected $casts = [
        'posted_at' => 'datetime',
    ];
}
