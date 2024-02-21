<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article1($id) {
        return 'Halaman Artikel id ke- '.$id;
       }
}
