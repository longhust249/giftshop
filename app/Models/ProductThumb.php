<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductThumb extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'img_thumb1', 'img_thumb2', 'img_thumb3', 'img_thumb4', 'img_thumb5' 
    ];
}
