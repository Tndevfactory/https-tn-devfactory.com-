<?php

namespace App\Models\Ar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArCommande extends Model
{
    use HasFactory;
    
    /** mass assignable attribute
     * @var array
     */
    protected $fillable=[
        'name'
    ];
}
