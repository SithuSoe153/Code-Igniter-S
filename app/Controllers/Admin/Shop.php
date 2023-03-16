<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        echo '<h2> This is a Admin Shop area. </h2>';
    }

    public function product($type, $model)
    {
        echo '<h2> This is an Admin product</h2>';

        // return view('product');
    }
}
