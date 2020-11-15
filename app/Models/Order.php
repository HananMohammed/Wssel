<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ["shop_type" ,"customer_id" ,"date" ,"time" ,"amount"] ;

    protected $hidden = ["created_by" ,"created_at"] ;

    public function customer()
    {
        return $this->belongsTo(Customer::class,"customer_id");
    }

}
