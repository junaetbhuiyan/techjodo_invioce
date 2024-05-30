<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public $table = 'invoices';
    protected $fillable = [
        'id',
        'service_id',
        'total',
        'due',
        'advance',
        'discount',
        'date'
    ];

    // public function customers(){
    //     return $this->hasOne(Customer::class,'id','customer_id');
    // }
    public function services()
    {
        return $this->hasOne(Service::class,'id','service_id');
    }
}
