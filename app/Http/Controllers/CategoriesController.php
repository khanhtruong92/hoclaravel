<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CategoriesController extends Controller
{
    //
    public function __construct(Request $request)
    {
        // dd($request);
        if ($request->is('categories')) {
            echo '<h3>Xin chao moi nguoi</h3>';
        }
    }

    // Hien thi dang sach chuyen muc (get)
    public function index(Request $request)
    {
        // if (isset($_GET['id'])) {
        //     echo $_GET['id'];
        // }
        // dd($request);
        // $path = $request->path();
        // echo $path;
        // dd($path);
        // $url = $request->url();
        // echo $url;
        // if ($request->isMethod('GET')) {
        //     echo 'Phuong thuc GET';
        // }
        // echo $request->method();
        // dd($request->header());
        // dd($request->input('id'));
        // dd($request->id);
        dd(request());
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
    public function addCategory(Request $request)
    {
        // $old = $request->old('category_name');
        return view('clients/categories/add');
    }

    // Them du lieu vao chuyen muc (post)
    public function handleAddCategory(Request $request)
    {
        // $allData = $request->all();
        // dd($allData);

        // dd($_POST);
        // return redirect(route('categories.add'));
        // return 'Submit them chuyen muc';

        if ($request->has('category_name')) {
            // dd($request->category_name);
            // $cateName = $request->category_name;
            $request->flash(); // set session flash

            return redirect(route('categories.add'));
        } else {
            return 'Khong co category_name';
        }
    }

    // Xoa du lieu (phuong thuc Delete)
    public function deleteCategory($id) 
    {
        return 'Submit xoa chuyen muc: ' . $id;
    }

    // Lay file upload
    public function getFile()
    {
        return view('clients.categories.file');
    }
    // Xu ly thong tin file
    public function handleFile(Request $request)
    {
        // $file = $request->file('photo')->extension();
        // dd($file);
        // dd($request->photo->store('images'));
        dd($request->photo->getClientOriginalName());
    }
    
}
