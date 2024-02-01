<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormRegistration extends Model
{
    use HasFactory;
    protected $table = 'form_registrations'; // table name
    protected $timestamp = true; // enable timestamps
    protected $primaryKey = 'id'; // primary key
    protected $fillable = [
        'firstname',
        'lastname',
        'dob',
    ];
}
