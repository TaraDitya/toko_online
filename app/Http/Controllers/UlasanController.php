<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class UlasanController extends Controller
{
    
    public function index() 
    {
        $ulasans = Ulasan::latest()->paginate(10);
        return view('ulasan.index', compact('ulasans'));
    }

    public function create()
    {
        return view('ulasan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username'=>'required',
            'ulasan'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg'
        ]);

        $image =$request->file('image');
        $image->storeAs('public/ulasans', $image->hashName());

        $ulasan = Ulasan::create([
            'username'=>$request->username,
            'ulasan'=>$request->ulasan,
            'image'=>$image->hashName(),
        ]);

        if($ulasan){
            return redirect()->route('ulasan.index')->with(['success'=> 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('ulasan.index')->with(['error'=> 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Ulasan $ulasan)
    {
        return view('ulasan.edit', compact('ulasan'));
    }

    public function update(Request $request, Ulasan $ulasan)
    {
        $this->validate($request,[
            'username'=>'required',
            'ulasan'=>'required',
        ]);

        $ulasan = Ulasan::findOrFail($ulasan->id);

        if($request->file('image') == ""){
            $ulasan->update([
                'username'=>$request->username,
                'ulasan'=>$request->ulasan
            ]);
        }else{
            Storage:: disk('local')->delete('public/ulasans/'.$ulasan->image);

            $image =$request->file('image');
            $image->storeAs('public/ulasans', $image->hashName());

            $ulasan->update([
                'username'=>$request->username,
                'ulasan'=>$request->ulasan,
                'image'=>$image->hashName(),
        ]);

            if($ulasan){
                return redirect()->route('ulasan.index')->with(['success'=> 'Data Berhasil Diupdate!']);
            }else{
                return redirect()->route('ulasan.index')->with(['error'=> 'Data Gagal Diupdate!']);
            }
        }
    }

    public function destroy($id)
    {
        $ulasan = Ulasan::findOrFail($id);
        Storage::disk('local')->delete('public/ulasans/'.$ulasan->image);
        $ulasan->delete();

        if($ulasan){
            return redirect()->route('ulasan.index')->with(['success'=> 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('ulasan.index')->with(['error'=> 'Data Gagal Dihapus!']);
        }
    }
}

