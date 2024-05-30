<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $table = 'customers';
    protected $filable =[
        'id',
        'customer_name',
        'customer_number'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

}
