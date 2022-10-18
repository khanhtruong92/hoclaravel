<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Action index()
    public function index(Request $request) 
    {
        // Homework 2 (park: create page)
        // Dùng thuộc tính động -Retrieving Input Via Dynamic Properties- (của Illuminate\Http\Request) để lấy giá trị param view
        $a = $request->view;
        if ($a == 'welcome') {
            return view('welcome');
        } else {
            return view('index');
        }
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function getNews() 
    {
        return 'Danh sach tin tuc';
    }

    public function getCategories()
    {
        return 'Chuyen muc doi song';
    }
}
