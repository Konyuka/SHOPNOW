<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Order extends Eloquent
{
        protected $connection = 'mongodb';
        protected $collection = 'Orders';

        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        public function product()
        {
            return $this->belongsTo(Product::class, 'product_id');
        }
}
