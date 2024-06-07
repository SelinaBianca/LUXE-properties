<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Apartment extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'price',
        'category',
        'location',
        'agent',
        'contact_email',
        'contact_phone',
        'published_at',
        'slug',
        'featured',
        'beds',
        'baths'
        ];

//    protected $casts = [
//        'images' => 'array',
//    ];

}
