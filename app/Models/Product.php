<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'Products';

    public function orders(){
        return $this->hasMany(Order::class);
    }

}
