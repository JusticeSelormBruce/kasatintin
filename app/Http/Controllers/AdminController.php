<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
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
}
