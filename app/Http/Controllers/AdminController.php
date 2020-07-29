<?php

namespace App\Http\Controllers;

use App\Category;
use App\Info;
use App\Logo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   private  $model;
    public function __construct()
    {
        $this->model = new Logo();
    }
    public function CategoryIndex()
    {
        $newsCategories = Category::all();
        return view('admin.category.index', compact('newsCategories'));
    }
    public function CategoryStore(Request $request)
    {
        Category::create($request->except('_token'));
        return back()->with('msg', 'News Category added Suceessfully');
    }
    public function CategoryEdit(Request $request)
    {
        Category::whereId($request->id)->update($request->except('_token', 'id'));
        return back()->with('msg', 'News Category edited Suceessfully');
    }
    public function CategoryDelete($id)
    {
        Category::whereId($id)->delete();
        return back()->with('msg', 'News Category Deleted Suceessfully');
    }
    public function SystemInfoIndex()
    {
        $info = Info::latest()->first();
        return view('admin.info.index', compact('info'));
    }

    public function StoreSystemInfo(Request $request)
    {
       Info::updateOrCreate ($request->except('_token'));
       return back()->with('msg','System information updated');
    }

    public function StoreSystemLogo()
    {
        $data = $this->model->LogoData();
        Logo::updateOrCreate($data);
        return back()->with('msg','System Logo updated');
    }
    
}
