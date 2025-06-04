<?php

namespace App\Controllers;





class ContactController extends BaseController
{
    public function index()
    {
        $dataUser = ['username' => 'april', 'password' => '202cb962ac59075b964b07152d234b70', 'role' => 'admin'];

        // Kirim data ke view
        return view('v_contact', ['user' => $dataUser]);
    }
}