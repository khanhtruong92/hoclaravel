<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
        
    }

    // Hien thi dang sach chuyen muc (get)
    public function index()
    {
        return view('clients/categories/list');
    }

    // Lay chuyen muc theo ID (get)
    public function getCategory($id)
    {
        return view('clients/categories/edit');
    }

    // Sua chuyen muc (post)
    public function updateCategory($id)
    {
        return 'Submit sua chuyen muc: ' . $id;
    }

    // Show form them du lieu (get)
    public function addCategory()
    {
        return view('clients/categories/add');
    }

    // Them du lieu vao chuyen muc (post)
    public function handleAddCategory()
    {
        return redirect(route('categories.add'));
        // return 'Submit them chuyen muc';
    }

    // Xoa du lieu (phuong thuc Delete)
    public function deleteCategory($id) 
    {
        return 'Submit xoa chuyen muc: ' . $id;
    }
}
