<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // fungsi index
    public function index(){
        return view('admin.blog.index',[
            'artikels' => Blog::orderBy('id','desc')->get()
        ]);
    }

    //halaman create
    public function create(){
        return view('admin.blog.create');
    }

    // funngsi store
    public function storage(Request $request){
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',
            'desc.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

    }

    //halaman edit 
    public function edit($id){
        return view('admin.blog.edit');
    }

    // fungsi update
    public function update(Request $request ,$id){

    }

    //fungsi delete
    public function destroy($id){

    }
}
