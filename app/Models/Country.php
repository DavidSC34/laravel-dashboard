<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'country';
    public $timestamps = false; //ONly in case the table does'not contain non of created_at and updated_at
    protected $primaryKey = 'Code';


    public function provinces()
    {
        return $this->hasMany(Province::class,'Country','Code');
    }

}
