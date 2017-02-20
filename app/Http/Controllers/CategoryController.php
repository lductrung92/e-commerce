<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Requests;
use App\Http\Requests\CategoryRequest;


use App\Category;
class CategoryController extends Controller
{
    public function getList() {
    	return view('admin.category.list');
    }

    public function getInsert() {
    	$cate = Category::select('id', 'name')->get();
    	return view('admin.category.insert', ['cate' => $cate]);
    }

    public function postInsert(CategoryRequest $request) {
    	$cate = new Category;

    	$cate->name = $request->txtName;
    	$cate->alias = changeTitle($request->txtName);
    	$cate->order = $request->txtOrder;
    	$cate->parent_id = $request->selParent;
    	$cate->keywords = $request->txtKeyWords;
    	$cate->description = $request->txtDes;

    	$cate->save();

    	return redirect('admin/category/list')->with(['flash_level' => 'success', 'flash_message' => 'Insert success']); 
    }

    public function getUpdate($id) {
    	return view('admin.category.update');
    }
}
