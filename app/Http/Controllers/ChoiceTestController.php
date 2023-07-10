<?php

namespace App\Http\Controllers;

use App\Models\ChoiceTest;
use App\Models\ChoiceTestAnswer;
use App\Models\ChoiceTestQuestion;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ChoiceTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = '';
        $data = ChoiceTest::where('user_id',auth()->user()->id)->orderBy('id','DESC')->first();
        if($data){
            $question_array = $data->question_array;
            $questionIds = explode(",",substr($question_array,1,-1));
            $questions = ChoiceTestQuestion::whereIn('id', $questionIds)
            ->with(['answer' => function ($query) {
                $query->select('id', 'answer', 'question_id');
            }])
            ->get();
        }
        return view('pages.multiple-choice',[
            'data'      => $data,
            'questions' => $questions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $a = '';
        $posts = ChoiceTestQuestion::inRandomOrder()
                ->limit(30)
                ->get();
        foreach($posts as $post){
            $a .= $post->id.',';
        }
        $insert = ChoiceTest::create([
            'user_id'       => auth()->user()->id,
            'question_array'=> '['.$a.']',
            'score'         => 0,
        ]);
        if($insert){
            return redirect()->route('test-mulitple_choice');
        }
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
    public function show(ChoiceTest $choiceTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChoiceTest $choiceTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChoiceTest $choiceTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChoiceTest $choiceTest)
    {
        //
    }
}
