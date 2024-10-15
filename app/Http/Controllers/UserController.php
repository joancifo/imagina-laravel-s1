<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
//        return view('users.show',  compact(['user']));

//        route('categoria.detail-page');

        return view('users.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function loginForm()
    {
        return view('login');
    }

    public function login()
    {
        $data = \request()->all();

        $result = User::where('email', $data['username'])
//            ->where('password', Hash::make($data['password']))
            ->first()
        ;


        if ($result and Hash::check($data['password'], $result->password)) {
            session()->put('is_logged_in', true);
            return redirect()->to('dashboard');
        } else {
           return redirect()->back()->withInput()
//               ->with(['test' => 'Error de usuario'])
               ;
        }
    }
}
