<?php

namespace App\Http\Controllers;

use App\Models\RolePlayGroup;
use App\Models\RolePlayQuestion;
use App\Models\RolePlaySubGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $rolename = '';
        $user_id = auth()->user()->id;
        $user = User::where('id',$user_id)->first();
        $rolenames = $user->getRoleNames();
        if(count($rolenames)){
            $rolename = $rolenames[0];
        }
        // $a = '';
        // $rolePlay = RolePlayQuestion::all();
        // foreach($rolePlay as $role){
        //     $a .= "DB::table('role_play_questions')->insert(['id' => '".$role->id."','sub_group_id' => '".$role->sub_group_id."','question' => '".$role->question."','created_at' => '".$role->created_at."','updated_at' => '".$role->updated_at."']);#n";
        // }
        // dd($a);
        // dd($rolename);
        return view('pages.dashboard',[
            'role'      => $rolename,
        ]);
    }
}
