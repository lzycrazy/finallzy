<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketAds extends Model
{
    use HasFactory;
    protected $table = 'marketads';

    public $timestamps = false;
}
