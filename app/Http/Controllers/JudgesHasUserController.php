<?php

namespace App\Http\Controllers;

use App\Models\JudgesHasUser;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class JudgesHasUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users          = User::where('id','!=',1)->with('roles')->get();
        // $JudgesHasUser  = JudgesHasUser::with('judges.roles','user')->get();
        // dd($JudgesHasUser);
        $judge  = User::where('id',auth()->user()->id)->with('roles')->first();
        $users  = User::whereNot('id',1)->with('roles','judges.user')
        ->when($judge, function ($query) use ($judge) {
            return  $query->whereHas('roles',function ($query) use ($judge) {
                $query->where('name','Judge');
            });
        })
        ->get();
        // dd($users);

        return view('pages.judges.index',[
            'users'      => $users,
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
    public function show(JudgesHasUser $judgesHasUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($judgesHasUser)
    {
        $checked = array();
        $judge  = User::where('encrypted_id',$judgesHasUser)->with('roles')->first();
        // dd($judge->roles[0]->id);
        $users  = User::whereNot('encrypted_id',$judgesHasUser)->with('roles')
        ->when($judge, function ($query) use ($judge) {
            return  $query->whereDoesntHave('roles',function ($query) use ($judge) {
                $query->where('id',$judge->roles[0]->id)
                ->orWhere('id',1);
            });
        })
        ->get();
        $get = JudgesHasUser::where('judge_id',$judge->id)->get();
        if(count($get)){
            foreach($get as $g){
                array_push($checked,$g->user_id);
            }
        }
        // dd($users);
        return view('pages.judges.edit',[
            'judge'     => $judge,
            'users'     => $users,
            'checked'   => $checked,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $judgesHasUser)
    {
        // dd(count($request->check),$judgesHasUser);
        $judge  = User::where('encrypted_id',$judgesHasUser)->with('roles')->first();
        $data   = JudgesHasUser::where('judge_id',$judge->id)->get();
        if(count($data)){
            JudgesHasUser::where('judge_id',$judge->id)->delete();
        }
        // dd($data);
        $check = $request->check;
        $a = '';
        if(count($check)){
            for($i=0;$i<count($check);$i++){
                $answers[] = [
                    'judge_id'  => $judge->id,
                    'user_id'   => $check[$i],
                ];
            }
        }

        JudgesHasUser::insert($answers);

        return redirect('judges/index');
        // dd($a);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JudgesHasUser $judgesHasUser)
    {
        //
    }
}
