<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = "order_details";

    public function Order(){

    	return $this->belongsTo("App\Order","order_id","id");
    }

    public function Product(){
    	
    	return $this->belongsTo("App\Product","product_id","id");
    }
}
