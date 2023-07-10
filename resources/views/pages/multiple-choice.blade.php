@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="card shadow-lg mx-4 card-profile-bottom">
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
                @if(!$questions)
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
                @endif
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            @if($questions)
            <div class="col-md-12">
                <div class="card p-3">
                    @foreach ($questions as $idx => $question)
                    <ul class="navbar-nav">
                        <label><h6>{{ $idx+1 }}. {{ $question->question }}</h6></label>
                        @foreach ($question->answer as $answer)
                        <li class="nav-item ms-5">
                            <input type="radio" name="answer_{{ $question->id }}" id="q_{{ $answer->id }}" value="{{ $question->id }}-{{ $answer->id }}" onclick="answerEach()"/>
                            <label for="q_{{ $answer->id }}">{{ $answer->answer }}</label>
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

    <script type="text/javascript">
        var answer_array = [];
        var questions = <?php echo json_encode($questions); ?>;

        function answerEach(){
            for (var i = 0; i < questions.length; i++) {
                var question = questions[i];
                let questionId = question.id;
                const radioButtons = document.querySelectorAll('input[name="answer_'+questionId+'"]');
                let selectedSize;
                for (const radioButton of radioButtons) {
                    radioButton.addEventListener('change', function() {
                        var questionId = radioButton.dataset.questionId;
                        var selectedValue = radioButton.value;
                        if (!answer_array.includes(selectedValue)) {
                            answer_array.push(selectedValue);
                            console.log(answer_array);
                            push_data(selectedValue);
                        }
                    });
                    // if (radioButton.checked) {
                    //     selectedSize = radioButton.value;
                    //     answer_array.push(radioButton.value)
                    //     console.log(answer_array);
                    //     push_data(radioButton.value);
                    // }
                }
            }
        }

        function push_data(value){
            console.log("Push data : "+value)
        }
    </script>
@endsection
