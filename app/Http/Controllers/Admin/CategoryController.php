<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        if(Auth::check()){
            $category = Category::all();
            return view('Admin/category' , compact('category'));
        }
    }

    public function store(Request $request){
        if(Auth::check()){
            $request->validate([
                'name' => 'required',
                'image' => 'required|mimes:jpeg,png,jpg,gif|max:20480',
            ]);

            if($request->has('image')) {
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $originalName = $image->getClientOriginalName();
                $image->storeAs('public/Category/' , $originalName);
            }

            $category = new Category;
            $category->name = $request->name;
            $category->gambar = $originalName;
            $category->save();
            return redirect()->route('category')->with('message','Data created is successfully');
        }
    }

    public function edit(Request $request){
        if(Auth::check()){
            $category = Category::findOrfail($request->id);
            $request->validate([
                'name' => 'required',
                'image' => 'required|mimes:jpeg,png,jpg,gif|max:20480',
            ]);

            if($request->has('image')) {
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $originalName = $image->getClientOriginalName();
                $image->storeAs('public/Category/' , $originalName);
            }

            $category->name = $request->name;
            $category->gambar = $originalName;
            $category->save();

            return redirect()->route('category')->with('message','Data created is successfully');
        }
    }

    public function delete($id){
        $category = Category::findOrFail(decrypt($id));
        $category->delete();
        return redirect()->route('category')->with('message','Data deleted is successfully');
    }

}
