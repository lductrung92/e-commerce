<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'alias', 'price', 'intro', 'content', 'image', 'keywords', 'description', 'user_id', 'category_id'];
    public $timestamps = false;

    public function category() {
    	return $this->belongsTo('App\Category');
    }

    public function product_images() {
    	return $this->hasMany('App\ProductImage');
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
