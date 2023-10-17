<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class produkController extends Controller
{
    public function index()
    {
        $produks = produk::latest()->paginate(10);
        return view('produk.index',compact('produks'))->with('produk',$produks);
    }

    public function create()
    {
        return view('produk.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto_produk'=>'required|image|mimes:png,jpg,jpeg',
            'nama_produk'=>'required',
            'harga_produk'=>'required|numeric'
        ]);

        $foto_produk =$request->file('foto_produk');
        $foto_produk->storeAs('public/produks', $foto_produk->hashName());

        $produk = produk::create([
            'foto_produk'=>$foto_produk->hashName(),
            'nama_produk'=>$request->nama_produk,
            'harga_produk'=>$request->harga_produk
            
        ]);

        if($produk){
            return redirect()->route('produk.index')->with(['success'=> 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('produk.index')->with(['error'=> 'Data Gagal Disimpan!']);
        }  
    }
    public function edit(produk $produk)
    {
        return view('produk.edit',compact('produk'));
    }

    public function update(Request $request, produk $produk)
    {
        $this->validate($request,[
            'foto_produk'=>'required',
            'nama_produk'=>'required',
            'harga_produk'=>'required'
        ]);

        $produk = produk::findOrFail($produk->id);

        if($request->file('foto_produk') == ""){
            $produk->update([
                'nama_produk'=>$request->nama_produk,
                'harga_produk'=>$request->harga_produk
            ]);
        }else{
            Storage:: disk('local')->delete('public/produks/'.$produk->foto_produk);

            $foto_produk =$request->file('foto_produk');
            $foto_produk->storeAs('public/produks', $foto_produk->hashName());

            $produk->update([
                'foto_produk'=>$foto_produk->hashName(),
                'nama_produk'=>$request->nama_produk,
                'harga_produk'=>$request->harga_produk,
                
        ]);
    }
    if($produk){
        return redirect()->route('produk.index')->with(['success'=> 'Data Berhasil Diupdate!']);
    }else{
        return redirect()->route('produk.index')->with(['error'=> 'Data Gagal Diupdate!']);
        }
    }
    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
        Storage::disk('local')->delete('public/produks/'.$produk->foto_produk);
        $produk->delete();
        if($produk){
            return redirect()->route('produk.index')->with(['success'=> 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('produk.index')->with(['error'=> 'Data Gagal Dihapus!']);
        }
    }

}
