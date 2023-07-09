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
        $data = ChoiceTest::where('user_id',auth()->user()->id)->first();
        $question_array = $data->question_array;
        $questionIds = explode(",",$question_array);
        $questions = ChoiceTestQuestion::whereIn('id',$questionIds)->with('answer')->get();
        // dd($questions);
        return view('pages.multiple-choice',[
            'data'      => $data,
            'questions' => $questions,
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
