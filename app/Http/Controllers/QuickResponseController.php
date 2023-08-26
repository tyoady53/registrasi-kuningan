<?php

namespace App\Http\Controllers;

use App\Models\JudgesHasUser;
use App\Models\QuickResponse;
use App\Models\QuickResponseQuestion;
use App\Models\User;
use Illuminate\Http\Request;

class QuickResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $me = auth()->user()->id;
        $judge  = User::where('id',auth()->user()->id)->with('roles')->first();
        $users = JudgesHasUser::with('user')->where('judge_id',$me)->get();
        return view('pages.quick_response.index',[
            'judge' => $judge,
            'users' => $users
        ]);
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
    public function show($encrypted)
    {
        $user = User::where('encrypted_id',$encrypted)->with('roles')->first();
        $role_id =$user->roles[0]->id;
        $quick_response = QuickResponseQuestion::get();
        return view('pages.quick_response.show',[
            'user'              => $user,
            'quick_responses'   => $quick_response
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuickResponse $quickResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuickResponse $quickResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuickResponse $quickResponse)
    {
        //
    }
}
