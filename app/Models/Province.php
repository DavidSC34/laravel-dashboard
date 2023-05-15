<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table = 'province';
    public $timestamps = false; //ONly in case the table does'not contain non of created_at and updated_at
    protected $primaryKey = ['Name', 'Country'];
}
