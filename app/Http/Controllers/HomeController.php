<?php

namespace App\Http\Controllers;

use App\Models\BenchMarkGroup;
use App\Models\BenchMarkQuestion;
use App\Models\QuickResponseQuestion;
use App\Models\RolePlayGroup;
use App\Models\RolePlayQuestion;
use App\Models\RolePlaySubGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;
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
        // $rolePlay = QuickResponseQuestion::all();
        // foreach($rolePlay as $role){
        //     $a .= "DB::table('quick_response_questions')->insert(['id' => '".$role->id."','parameter_question' => '".$role->parameter_question."','score_weight' => '".$role->score_weight."','created_at' => '".$role->created_at."','updated_at' => '".$role->updated_at."']);\n";
        // }
        // dd($a);
        // dd($rolename);
        return view('pages.dashboard',[
            'role'      => $rolename,
        ]);
    }
}
