<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customer($custid, $name, $address)
    {
        return view('customer', compact('custid', 'name', 'address'));
    }

    public function item($itemno, $name, $price)
    {
        return view('item', compact('itemno', 'name', 'price'));
    }

    public function order($custid, $name, $orderno, $date)
    {
        return view('order', compact('custid', 'name', 'orderno', 'date'));
    }

    public function orderdetails($transno, $orderno, $itemid, $name, $price, $qty)
    {
        return view('orderdetails', compact(
            'transno',
            'orderno',
            'itemid',
            'name',
            'price',
            'qty'
        ));
    }
}
