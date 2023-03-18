<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as Admin;
use App\Controllers;
use App\Models\BlogModel;


class Blog extends BaseController
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

    function new()
    {
        $data = [

            'meta_title' => 'New Post',
            'title' => 'Create New Post',

        ];

        if ($this->request->getMethod() == 'post') {

            $model = new BlogModel();
            $model->save($_POST);
        }

        return view('new_post', $data);
    }
}
