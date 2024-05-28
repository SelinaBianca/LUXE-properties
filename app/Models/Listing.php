<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'description',
        'price',
        'category',
        'location',
        'agent',
        'contact_email',
        'contact_phone',
        'images',
        'published_at',
        'slug',
        'featured'
        ];
}
