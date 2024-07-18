<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\CategoryFormRequest;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\file;
use Illuminate\Support\str;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index',compact('category'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $data=$request->validate;

        $category = new Category;
        $category->name = $request['name'];
        $category->slug = Str::slug($request['slug']);
        $category->description = $request['description'];

        if($request->hasfile('image')){
            $destination = 'uploads/category/'.$category->image;
            if(File::exists($destination)){
                File::delete($destination);
            }



            $file=$request->file('image');
            $filename = time()  . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/',$filename );
            $category->image=$filename;
        }
        $category->meta_title = $request['meta_title'];
        $category->meta_description = $request['meta_description'];
        $category->meta_keyword = $request['meta_keyword'];

        $category->navbar_status = $request->navbar_status ==true ? '1':'0';
        $category->status = $request->status ==true ? '1':'0';
        $category->created_by =Auth::user()->id;
        $category->save();
        return redirect('admin/category')->with('message','Category Added Successfully');
    }
    public function edit($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.category.edit', compact('category'));

    }
    public function update(Request $request ,$category_id)
    {
        $data=$request->validated;

        $category =  Category::find($category_id);
        $category->name = $request['name'];
        $category->slug = Str::slug($request['slug']);
        $category->description = $request['description'];

        if($request->hasfile('image')){
            $file=$request->file('image');
            $filename = time()  . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/',$filename );
            $category->image=$filename;
        }
        $category->meta_title = $request['meta_title'];
        $category->meta_description = $request['meta_description'];
        $category->meta_keyword = $request['meta_keyword'];

        $category->navbar_status = $request->navbar_status ==true ? '1':'0';
        $category->status = $request->status ==true ? '1':'0';
        $category->created_by =Auth::user()->id;
        $category->update();
        return redirect('admin/category')->with('message','Category updated Successfully');
    }

    public function destroy($category_id)
    {
        $category = Category::find($category_id);
        if($category)
        {
            $destination = 'uploads/category/'.$category->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $category->posts()->delete();
            $category->delete();
            return redirect('admin/category')->with('message','Category Deleted with its Post Successfully');
        }
        else {
            return redirect('admin/category')->with('message','No Category Id Found');
        }

    }


}
