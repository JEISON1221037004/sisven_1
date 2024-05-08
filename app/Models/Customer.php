<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_number', 'first_name', 'last_name', 'address', 'birthday_date', 'phone_number', 'email'
    ];

    protected $table = 'customers';
}
