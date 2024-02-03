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
    'type',
    'Adress',
    'Number_of_bedrooms',
    'Number_of_bathroom',
    'Agent',
    'Agent_ID',
    'Agent_Contact_Number'
];

}