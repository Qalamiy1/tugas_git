<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Blogcontroller extends Controller
{
  public function blog(){
    $blogs=Blogs::Get();
    return view('backend.blogs.index',[
      'Callblog'=>$blogs,
    ]);
  }

  public function tambah(){
    return view('backend.blogs.tambah');
  }

  public function aksi_tambah(Request $request){

    $request->validate([
      'title' => 'required',
      'description' =>'required',
      'file' => 'required|file|mimes:jpeg,png|max:2048',
    ],
    // klo pengen costum validate / validasinya ketik kek gini 
    [
      'title.required' => 'judul wajib diisi',
      'description.required' => 'deskripsi wajib diisi',
      'file.'
    ]);
    $data = [
      'title' => $request->title,
      'description' => $request->description,
      'slug'=>Str::slug($request->title),
      'created_by'=> 0,
      'created_at'=>date('Y-m-d h:i:s')
    ];

    if ($request->hasFile('file')){ //akan memeriksa file yang diminta dengan nama file fungsi hasfile() mengembalikan true jika ada. 
      $file = $request->file('file');//jika file ternyata ada, maka fungsi ini akan mengambil object 
      $filename =time().'.'. $file->//time() ini menghasilkan timestamp unix saat ini.
      getClientOriginalExtension();//mendapatkan ekstensi file asli.

      $file->move(public_path('blog'), $filename);//mengembalikan path lengkap ke direktori blog dalam folder public | Move() memindahkan file yang diunggah ke direktori yg ditentukan dengan nama file baru

      $data['file'] = 'blogs/' . $filename;//menyimpan path relatif file dalam array $data. path ini kemungkinan akan disimpan di database untuk refrensi nanti
    }
    // mengembalikan  ke halaman index di backend.blog
    Blogs::insert($data);
    return redirect()->route('ke-backend_blog')->with('success','blog berhasil ditambahkan');


  }
}
