<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31/7/2018
 * Time: 10:58 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    public function category() {
        return $this->belongsTo('App\Category','categoryId');
    }
}