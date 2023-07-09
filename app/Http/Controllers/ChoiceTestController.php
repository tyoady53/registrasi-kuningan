<?php

namespace App\Http\Controllers;

use App\Models\ChoiceTest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ChoiceTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.multiple-choice');
        // dd(auth()->user());
        // multiple-choice
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
