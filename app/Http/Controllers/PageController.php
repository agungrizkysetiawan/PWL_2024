<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
       }

       public function about() {
        return 'Agung Rizky <br> 2241720187';
       }

       public function articles($id) {
        return 'Halaman Artikel id ke- '.$id;
       }
}
