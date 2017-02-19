<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;

use App\Category;
class CategoryController extends Controller
{
    public function getList() {
    	return view('admin.category.list');
    }

    public function getInsert() {
    	return view('admin.category.insert');
    }

    public function getUpdate($id) {
    	return view('admin.category.update');
    }
}
