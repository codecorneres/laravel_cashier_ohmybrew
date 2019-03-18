<?php

namespace App;

use OhMyBrew\ShopifyApp\Models\Shop as BaseShop;
use Laravel\Cashier\Billable;

class Shop extends BaseShop
{
    use Billable;
    protected $table = 'shops';

    // Your extensions or changes
}