@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'User Management'])
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
                            {{ $user->name ?? '' }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Public Relations
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="p-3">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 80%;" class="text-center"> Question </th>
                                    <th scope="col" style="width: 10%;" class="text-center">Yes</th>
                                    <th scope="col" style="width: 10%;" class="text-center">No</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($role_plays as $role_play)
                                <tr>
                                    <td colspan="3" style="background:blue;color:white;"><strong>{{ $role_play->name }}</strong></td>
                                </tr>
                                    @foreach ($role_play->sub_groups as $sub_group)
                                        @if (str_contains($sub_group->gender, $user->gender))
                                            @if($sub_group->name)
                                            <tr>
                                                <td colspan="3" style="background:lightblue;color:black;">{{ $sub_group->name }}</td>
                                            </tr>
                                            @endif
                                            @foreach ($sub_group->questions as $question)
                                            <tr>
                                                <td>{{ $question->question }}</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" value="yes-{{ $question->id }}" name="question-{{ $question->id }}" id="{{ $question->id }}"></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" value="no-{{ $question->id }}" name="question-{{ $question->id }}" id="{{ $question->id }}"></td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div>
                        <button class="btn btn-success end-0">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
    <style>
        /* Custom CSS to wrap text in table cells */
        table {
            width: 100%;
            table-layout: fixed;
        }
        table td {
            word-wrap: break-word;
        }
        .table td {
            white-space: normal;
        }
    </style>

@endsection
