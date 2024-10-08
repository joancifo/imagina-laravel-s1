<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


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

    public function test()
    {
////        User::all();
//        return User::query()
////            ->where('id', '<', 3)
////            ->whereLike('name',  '%Wiegand%')
////            ->limit(2)
////            ->toSql()
//            ->get()
            ;

//          return  User::query()->where('id', '=', 3)->delete();
        User::query()->where('id', 4)->update([
            'name' => 'Joan'
        ]);

        return User::query()->where('id', 4)->limit(1)->get()->first();
//        return User::find(4);

        $sql = "UPDATE users SET name = 'Joan' WHERE id = 4";
    }
}
