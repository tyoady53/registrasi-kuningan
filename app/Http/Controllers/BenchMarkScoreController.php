<?php

namespace App\Http\Controllers;

use App\Models\BenchMarkGroup;
use App\Models\BenchMarkScore;
use App\Models\JudgesHasUser;
use App\Models\User;
use Illuminate\Http\Request;

class BenchMarkScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $me = auth()->user()->id;

        $users = JudgesHasUser::with('user')->where('judge_id',$me)->get();
        return view('pages.bench_mark.index',[
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

    }

    /**
     * Display the specified resource.
     */
    public function show($encrypted)
    {
        $user = User::where('encrypted_id',$encrypted)->with('roles')->first();
        $role_id =$user->roles[0]->id;
        $bench_mark = BenchMarkGroup::with('questions')->get();
        // dd($bench_mark);
        return view('pages.bench_mark.show',[
            'user'          => $user,
            'bench_marks'    => $bench_mark
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BenchMarkScore $BenchMarkScore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BenchMarkScore $BenchMarkScore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BenchMarkScore $BenchMarkScore)
    {
        //
    }
}
