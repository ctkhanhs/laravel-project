<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table ='product';
    protected $fillable = ['name','price','sale_price','image','category_id','description'];
    public function cat(){
        return $this->hasOne(Category::class,'id','category_id');
    }


    public function scopeSearch($query)
    {
        if (request('key')) {
            $key = request('key');
            $query = $query->where('name', 'like', '%' . $key . '%');
        }
        return $query;
    }

    public function price_asc(){
        $low_price = Product::orderBy('price','ASC')->get();
        return $low_price;
    }
    public function price_desc(){
        $high_price = Product::orderBy('price','DESC')->get();
        return $high_price;
    }
    public function name_asc(){
        $name_asc = Product::orderBy('name','ASC')->get();
        return $name_asc;
    }
    public function name_desc(){
        $name_desc = Product::orderBy('name','DESC')->get();
        return $name_desc;
    }
    public function new_product(){
        $new = Product::orderBy('id','DESC')->get();
        return $new;
    }
    public function old_product(){
        $old = Product::orderBy('id','ASC')->get();
        return $old;
    }
}
