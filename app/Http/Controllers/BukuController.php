<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data_buku = \App\Buku::all();
        return view("buku.index", ["data_buku" => $data_buku]);
    }
}
