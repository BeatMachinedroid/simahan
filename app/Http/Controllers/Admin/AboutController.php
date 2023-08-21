<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index(){
        return view('Admin.about');
    }

    public function store(Request $request){
        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
        ];

        $about = About::create($data);
        return redirect()->route('view.about');
    }
    
}
