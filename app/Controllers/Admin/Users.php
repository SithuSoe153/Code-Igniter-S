<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        echo '<h2> This is a Users Area. </h2>';
    }

    public function getAllUsers()
    {
        echo '<h2> This is an Admin product</h2>';

        // return view('product');
    }
}
