<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MobileModel;
use CodeIgniter\Debug\Toolbar\Collectors\History;

class Cart extends BaseController {

    public function index()
    {
        $data['items'] = array_values(session('cart'));
        $data['total'] = $this->total();
        return view('cart/index', $data);
    }

    public function buy($id)
    {
        $mobileModel = new MobileModel();
        $mobile = $mobileModel->find($id);
        $item = array(
            "id" => $mobile['id'],
            "name" => $mobile['name'],
            "photo" => $mobile['photo'],
            "price" => $mobile['price'],
            "quantity" => 1
        );
        $session = session();
        if ($session->has('cart')) {
            $index = $this->exists($id);
            $cart = array_values(session('cart'));
            if ($index == -1) {
                array_push($cart, $item);
            } else {
                $cart[$index]['quantity']++;
            }
            $session->set('cart', $cart);
        } else {
            $cart = array($item);
            $session->set('cart', $cart);
        }
        return $this->response->redirect(site_url('cart/index'));
    }

    public function remove($id)
    {
        $index = $this->exists($id);
        $cart = array_values(session('cart'));
        unset($cart[$index]);
        $session = session();
        $session->set('cart', $cart);
        return $this->response->redirect(site_url('cart/index'));
    }

    public function update()
    {
        $cart = array_values(session('cart'));
        for ($i=0; $i < count($cart); $i++) { 
            $cart[$i]['quantity'] = $_POST['quantity'][$i];
        }
        $session = session();
        $session->set('cart', $cart);
        return $this->response->redirect(site_url('cart/index'));
    }
    
    private function exists($id)
    {
        $items = array_values(session('cart'));
        for ($i=0; $i < count($items); $i++) { 
            if ($items[$i]['id'] == $id) {
                return $i;
            }
        }

        return -1;
    }

    private function total()
    {
        $s = 0;
        $items = array_values(session('cart'));
        foreach ($items as $item) {
            $s += $item['price'] * $item['quantity'];
        }
        return $s;
    }

}