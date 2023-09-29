<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ShopController extends BaseController
{
    private $prod;
    public function __construct()
    {
       $this->prod = new \App\Models\ShopModel();
    }

    public function Shop()
    {
        return view('Shop');
    }

    public function Login()
    {
         return view('Login');
    }

    public function Admin()
    {
      return view('Admin');
    }
}
