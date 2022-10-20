<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    //
    public function index(Request $request) 
    {
        // DB::table('examples')->insert([
        //     'name' => 'example 3',
        //     'description' => 'example 3 bla bla'
        // ]);

        // DB::table('examples')
        // ->where('name', 'example 2')
        // ->update([
        //     'description' => 'example 2 description'
        // ]);

        // DB::table('examples')
        // ->where('name', 'example 2')
        // ->delete();

        // $data = DB::table('examples')
        // ->where('name', 'LIKE', '%example 1%')
        // ->get();
        // return $data;

        $data = Example::all();
        // $data = Example::where()

        return $data;
    }
}
