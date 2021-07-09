<?php

namespace App\Models\En;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnCommande extends Model
{
    use HasFactory;
     /** mass assignable attribute
     * @var array
     */
    protected $fillable=[
        'name'
    ];
}
