@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Quick Response Test '])
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
                            {{ auth()->user()->name ?? '' }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{ $judge->roles[0]->name }}
                        </p>
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
            @foreach ($users as $idx => $user)
            <div class="col-md-4">
                <div class="card p-3 myTicket" onclick="myFunction('{{ $user->user->encrypted_id }}')">
                    <div class="row">
                        <div class="col-md-4">
                            Name
                        </div>
                        <div class="col-md-8">
                            : {{ $user->user->name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Gender
                        </div>
                        <div class="col-md-8">
                            :
                            @if($user->user->gender == 'm')
                                Laki-Laki
                            @else
                                Perempuan
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @include('layouts.footers.auth.footer')
    </div>

    <style>
        .fixed {
            position: fixed;
            top: 0;
            right: 0;
            left: 17rem;
            margin-top: 15px;
            margin-right: 1.5rem;
            z-index: 99;
        }

        .additionalDiv {
            margin-top: 22.5rem;
        }

        .myTicket:hover{
            background-color:blue;
            color: white;
        }

        @media(max-width: 1199px){
            .fixed {
                position: fixed;
                top: 0;
                right: 0;
                left: 0;
                margin-top: 15px;
                z-index: 99;
            }

            .additionalDiv {
                margin-top: 22rem;
            }
        }

        @media(max-width: 910px){
            .card.card-profile-bottom{
                margin-top: 15rem;
            }
            .py-4{
                padding-top: 1rem !important;
            }
            .fixed {
                position: fixed;
                top: 0;
                right: 0;
                left: 0;
                margin-top: 15px;
                z-index: 99;
            }

            .additionalDiv {
                margin-top: 22rem;
            }
        }

        @media(max-width: 501px){
            .card.card-profile-bottom{
                margin-top: 12rem;
            }
            .py-4{
                padding-top: 1rem !important;
            }
            .fixed {
                position: fixed;
                top: 0;
                right: 0;
                left: 0;
                margin-top: 15px;
                z-index: 99;
            }

            .additionalDiv {
                margin-top: 20rem;
            }
        }

        @media(max-width: 464px){
            .card.card-profile-bottom{
                margin-top: 12rem;
            }
            .py-4{
                padding-top: 0.55rem !important;
            }
            .fixed {
                position: fixed;
                top: 0;
                right: 0;
                left: 0;
                margin-top: 15px;
                z-index: 99;
            }

            .additionalDiv {
                margin-top: 20rem;
            }
        }
    </style>

    <script>
        function myFunction(encrypted_id) {
            var base_url = window.location.origin;
            window.location.href = base_url+'/test/quick_response/show/'+encrypted_id;
            // console.log(base_url+'/test/role_play/show/'+encrypted_id)
        }
    </script>
@endsection
