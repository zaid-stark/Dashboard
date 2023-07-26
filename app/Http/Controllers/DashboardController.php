<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public  function index(){
        return view('dashboard');
    }

    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showAllDevices()
    {
        return view('all_devices');
    }

    public function addDeviceDetails()
    {
        return view('add_device_details');
    }


    //
    public function editDeviceDetails()
    {
        return view('edit_device_details');
    }

    public function createProduct()
    {
        return view('create_product');
    }

    public function createCategory()
    {
        return view('create_category');
    }

    public function createUnit()
    {
        return view('create_unit');
    }

    public function myProducts()
    {
        return view('my_products');
    }

    public function createTax()
    {
        return view('create_tax');
    }

    public function creditCustomer()
    {
        return view('credit_customer');
    }

    public function reprintInvoice()
    {
        return view('reprint_invoice');
    }

    public function reprintKot()
    {
        return view('reprint_kot');
    }

    public function desktopPos()
    {
        return view('desktop_pos');
    }

    public function posReturn()
    {
        return view('pos_return');
    }

    public function addUser()
    {
        return view('add_user');
    }

    public function myUser()
    {
        return view('my_user');
    }

    public function myInfo()
    {
        return view('my_info');
    }

    public function banners()
    {
        return view('banners');
    }

    public function subscribers()
    {
        return view('subscribers');
    }

    public function menuQr()
    {
        return view('menu_qr');
    }
}
