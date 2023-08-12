<?php

namespace App\Http\Controllers;

use App\Models\ChoiceTest;
use App\Models\ChoiceTestQuestion;
use App\Models\JudgesHasUser;
use App\Models\RolePlay;
use App\Models\RolePlayGroup;
use App\Models\User;
use Illuminate\Http\Request;

class RolePlayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(JudgesHasUser::where('judge_id',auth()->user()->id)->with(['user' => function ($query) {
        //     $query->with(['roles']);
        // }])->get());
        $me = auth()->user()->id;

        // $users  = User::whereNot('id',1)->with('judges.user')
        // ->when('judges', function ($query) use ($me) {
        //     return  $query->whereHas('judges',function ($query) use ($me) {
        //         $query->where('judge_id',$me);
        //     });})
        // // })->with(['judges.user' => function ($query) {
        // //     $query->with('roles.permissions.rolePlayGroup');
        // //     // $query->with(['roles' => function ($role) {
        // //     //     return RolePlayGroup::where('role_id','role.id')->get();
        // //     // }]);
        // // }])
        // ->get();

        $users = JudgesHasUser::with('user')->where('judge_id',$me)->get();
        return view('pages.role_play.index',[
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
        $role_plays = RolePlayGroup::where('role_id',$role_id)->with('sub_groups.questions')
        ->when($role_id, function ($query) use ($user) {
            return  $query->whereHas('sub_groups',function ($query) use ($user) {
                $query->where('gender', 'LIKE', '%' . $user->gender . '%');
            });
        })
        ->get();
        // dd($role_plays);
        return view('pages.role_play.show',[
            'user'          => $user,
            'role_plays'    => $role_plays
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RolePlay $rolePlay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RolePlay $rolePlay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RolePlay $rolePlay)
    {
        //
    }
}
