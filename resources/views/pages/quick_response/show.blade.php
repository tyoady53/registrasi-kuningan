@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Quick Response Test'])
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
                            {{ $user->roles[0]->name }}
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
                                    <th scope="col" style="width: 10%;" class="text-center">Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($quick_responses as $quick_response)
                                <tr>
                                    <td>{{ $quick_response->parameter_question }}</td>
                                    <td class="text-center">
                                        <select class="form-control" name="question-{{ $quick_response->id }}">
                                            <option value="" disabled selected>Choose One</option>
                                            <option value="5">5 (sangat baik)</option>
                                            <option value="4">4 (baik)</option>
                                            <option value="3">3 (cukup)</option>
                                            <option value="2">2 (kurang)</option>
                                            <option value="1">1 (sangat kurang)</option>
                                        </select>
                                    </td>
                                </tr>
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
