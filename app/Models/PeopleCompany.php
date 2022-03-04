<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleCompany extends Model
{
    use HasFactory;
     protected $table = 'peoplecompany';

    public $timestamps = false;
}
