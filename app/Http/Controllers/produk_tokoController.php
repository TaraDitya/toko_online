<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class produk_tokoController extends Controller
{
    public function produk()
    {
        $produks = produk::latest()->paginate(10);
        return view('produk',compact('produks'))->with('produk',$produks);
    }
}
