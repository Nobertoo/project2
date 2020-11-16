<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function ShowBeranda(){
        return view('beranda');
    }

    function ShowProduk(){
        return view('produk');
    }

    function ShowKategori(){
        return view('kategori');
    }

    function ShowLogin(){
       
    }
}