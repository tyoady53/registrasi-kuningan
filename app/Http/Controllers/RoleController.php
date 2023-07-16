<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()){
            $user_id = auth()->user()->id;
        }
        $user = User::where('id',$user_id)->first();
        $rolenames = $user->getRoleNames();
        dd(Role::all());
        if(count($rolenames)){
            // dd($rolename);
        }
        $roles = Role::when(request()->q, function($roles) {
            $roles = $roles->where('name', 'like', '%' . request()->q . '%');
        })->with('permissions')->latest()->paginate(5);

        // if(str_contains($a, 'roles.index')){
            return view('pages.multiple-choice',[
                // 'data'      => $data,
                // 'questions' => $questions
            ]);
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
