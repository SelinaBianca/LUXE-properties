<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseCategory extends Model
{
    use HasFactory;
protected $table = 'house_categories';

Protected $primaryKey = 'id';

Protected $fillable =[
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
