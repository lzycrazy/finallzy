<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brand';
     protected $fillable = ['id','category_id','subcategory_id','brand_name'];
      public $timestamps = false;
}
