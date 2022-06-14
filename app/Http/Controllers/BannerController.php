<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::paginate(2);
        return view('admin.banner.index',compact('banners'));
    }

    public function create(){
        return view('admin.banner.create');
    }

    public function store(Request $req){
        $req->validate([
            'upload' => [
                'required',
                'mimes:jpeg,jpg,png,gif,bmp'
            ]

        ], [
            'upload.required' => 'File không để trống',
            'upload.mimes' => 'Định dạng File không hợp lệ',
        ]);
        $ext = $req->upload->extension();
        $file_name = time() . '.' . $ext;
        $req->upload->move(public_path('uploads'), $file_name);
        $data['image'] = $file_name;
        Banner::create($data);
        return redirect()->route('banner.index');
    }

    public function destroy(Banner $banner){
        $banner->delete();
        return redirect()->route('banner.index');
    }
}
