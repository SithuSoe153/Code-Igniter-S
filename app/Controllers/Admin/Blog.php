<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        echo '<h2> A List of All Blog Post. </h2>';
    }

    public function createNew()
    {
        // echo '<h2> This is an Admin product</h2>';

        return view('blog');
    }

    public function saveBlog()
    {
        // echo '<h2> This is an Admin product</h2>';
        print_r($_POST);
        // return view('blog');
    }
}
