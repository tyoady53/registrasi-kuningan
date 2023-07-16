@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Choice Options Test'])
    <div class="card shadow-lg mx-4 card-profile-bottom" id="user_info">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ auth()->user()->firstname ?? '' }} {{ auth()->user()->lastname ?? '' }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Public Relations
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" style="background: #fff;">
                            <li class="nav-item">
                                <form name="myform" action="{{ route('test-create') }}" method="post">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">
                                        <span class="ms-2">Start Test</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4" id="question">
        <div class="row">
            @if($questions)
            {{-- {{ count($answer_array) }} --}}
            <div class="col-md-12">
                <div class="card p-3">
                    @foreach ($questions as $idx => $question)
                    <ul class="navbar-nav">
                        <label><h6>{{ $idx+1 }}. {{ $question->question }}</h6></label>
                        @foreach ($question->answer_options as $option)
                        <li class="nav-item ms-5">
                            <input type="radio" name="answer_{{ $question->id }}" id="q_{{ $option->id }}" value="{{ $question->id }}-{{ $option->id }}" onclick="answerEach()" @if($question->user_answer) @if($question->user_answer->answer == $option->id) checked @endif @endif/>
                            <label for="q_{{ $option->id }}">{{ $option->answer }}</label>
                        </li>
                        @endforeach
                    </ul>
                    <br>
                    @endforeach
                    <hr>
                    <div>
                        <button class="btn btn-success end-0">Simpan</button>
                    </div>
                </div>
            </div>
            @endif
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
