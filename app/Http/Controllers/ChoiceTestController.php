<?php

namespace App\Http\Controllers;

use App\Models\ChoiceTest;
use App\Models\ChoiceTestAnswer;
use App\Models\ChoiceTestQuestion;
use App\Models\ChoiceTestUserAnswer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
            ->with(['answer_options' => function ($query) {
                $query->select('id', 'answer', 'question_id')->inRandomOrder();
            }])->with(['user_answer' => function ($query) {
                $query->where('user_id',auth()->user()->id);
            }])
            ->get()
            ->map(function ($question) {
                $question->user_answer = $question->user_answer->first();
                return $question;
            });
        }
        // dd($questions);
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

    public function each_answer(Request $request)
    {
        $csrfToken = $request->header('X-CSRF-TOKEN');
        if ($csrfToken) {
            $user = Auth::user();
            // Retrieve user-specific session data
            // $userSessionData = Session::get('user_' . $user->id);
            if ($user) {
                $get_answer_by_id = ChoiceTestUserAnswer::where('user_id',$user->id)->where('question_id',$request->question)->first();
                if($get_answer_by_id) {
                    ChoiceTestUserAnswer::where('user_id',$user->id)->where('question_id',$request->question)->update([
                        'answer'        => $request->answer
                    ]);
                } else {
                    ChoiceTestUserAnswer::create([
                        'user_id'       => $user->id,
                        'question_id'   => $request->question,
                        'answer'        => $request->answer
                    ]);
                }
                return response()->json([
                    'success'   => true,
                    'message'   => 'saved',
                ]);
            }
        }
        return response()->json([
            'success'   => false,
            'message'   => 'oops',
            'data'      => csrf_token()
        ]);
    }
}
