<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FashionAds extends Model
{
    use HasFactory;
    protected $table = 'fashionads';

    public $timestamps = false;
}
