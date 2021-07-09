<?php

namespace App\Models\Fr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrCommande extends Model
{
    use HasFactory;
     /** mass assignable attribute
     * @var array
     */
    protected $fillable=[
        'name'
    ];
}
