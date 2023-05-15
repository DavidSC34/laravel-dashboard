<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contactsWbcVers2';
    public const CREATED_AT = 'fechaRegistro';
    public const UPDATED_AT = 'fechaActualizacion';
}
