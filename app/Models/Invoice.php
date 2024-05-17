<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'number', 'customer_id', 'date', 'pay_mode_id'
    ];

    protected $table = 'invoices';
}