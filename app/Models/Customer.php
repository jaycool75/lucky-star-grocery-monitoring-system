<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'customers';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    // Fillable
    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
    ];


}
