<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Controllers\ShopController;


class ShopController extends BaseController
{
    private $prod;
    private $ad;

    public function __construct()
    {
       $this->prod = new \App\Models\ShopModel();
       $this->ad = new \App\Models\UserModel();
    }



   public function insert()
    {
        $image = $this->request->getFile('image');

        if ($image->isValid() && !$image->hasMoved())
        {
          
            $image->move(ROOTPATH . 'public/images');

            $imageName = '/images/' . $image->getName();

            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'category' => $this->request->getVar('category'),
                'price' => $this->request->getVar('price'),
                'image' => $imageName,
                'quantity' => $this->request->getVar('quantity'),
            ];


        if ($id!= null) {
            $this->activity->set($data)->where('id', $id)->update();
        } 

        else 
        {
            $this->prod->insert($data);
        }

            return redirect()->to('/Admin');
        }


        else
        {
            return redirect()->back()->with('error', 'Image upload failed.');
        }
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
        $data['prod'] = $this->prod->findAll();
        return view('Admin', $data);
    }



    public function delete($id)
    {
        $this->prod->delete($id);
        return redirect()->to('Admin');
    }


    public function edit($id)
    {
            $data = [
                'prod' => $this->prod->findAll(),
                'dat' => $this->prod->where('id', $id)->first(),
            ];
            return view('update', $data);
    }
}
