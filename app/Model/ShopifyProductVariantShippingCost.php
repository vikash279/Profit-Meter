<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ShopifyProductVariantShippingCost extends Model
{
    protected $connection ='tenant';

    public function __construct()
    {
        // $this->connection = $database_name ? $database_name : Auth::User()->database_name;
    }
}
