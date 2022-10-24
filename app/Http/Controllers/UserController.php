<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $users = User::query()->orderBy('updated_at', 'desc')->get();
        // $users = DB::table('users')->orderBy('updated_at', 'desc')->get();

        // Homework 1, park Create CURD App
        $users = DB::table('users')->orderBy('id', 'asc')->get();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            // 'name' => 'Taylor Otwell',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        // return dd( $request);
        User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('users.edit', compact('user'));
        // return dd($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required|min:8'
        ]);
        $user->update($request->all());

        return redirect()->route('users.index')
        ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(User $user)
    // {
        //
        // $user->delete();
        // User::destroy($user->id);

        // DB::table('users')->where('id', $user->id)->delete();
        
        // return redirect()->route('users.index')
        // ->with('success', 'User deleted successfully');
    // }

    public function destroy(User $user)
    {
        // Homework 2, park Create CURD App
        if ($user->email_verified_at == null) {

            DB::table('users')->where('id', $user->id)->delete();
            
            return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
        } else {
            return redirect()->route('users.index')
            ->with('success', "Verified email. You can't delete");
        }
    }
}
