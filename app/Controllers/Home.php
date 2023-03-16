<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as Admin;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    function validation()
    {
        $shop = new Shop();
        echo $shop->product('laptop', 'MSI');

        $adminShop = new Admin();
        echo $adminShop->product('laptop', 'MSI');
    }
}
