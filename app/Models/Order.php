<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id','created_at','name','email','address','phone','status'];
    public function customer(){
        return $this->hasOne(Customer::class,'id','customer_id');
    }
    public function odt(){
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
}
