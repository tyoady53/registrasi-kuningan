<?php

namespace App\Http\Controllers;

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
        // $question = DB::table('choice_test_question')->get();
        // $dd_question = '';
        // foreach($question as $q){
        //     $dd_question .= "DB::table('users')->insert(['case_id' => '1','question' => '".$q->question."']);\n";
        // }
        // $answers = DB::table('choice_test_answer')->get();
        // $dd_answer = '';
        // foreach($answers as $a){
        //     $dd_answer .= "DB::table('choice_test_answer')->insert(['question_id' => '".$a->question_id."','value' => '".$a->value."','question' => '".$a->answer."']);\n";
        // }
        // dd($dd_question,$dd_answer);
        return view('pages.dashboard');
    }
}
