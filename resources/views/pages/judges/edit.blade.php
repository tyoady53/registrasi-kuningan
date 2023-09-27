@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Judge Seetings'])
    <div class="card shadow-lg mx-4 mt-8" id="user_info">
        <div class="card-body p-3">
            <div class="row gx-4">
                <form role="form" method="post" action="{{ route('judges.update', $judge->encrypted_id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="fw-bold">Name</label>
                                <input class="form-control" value="{{ $judge->name }}" name="name" type="text" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Role</label>
                        <br>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <th class="text-center"> Name </th>
                                    <th class="text-center"> Gender </th>
                                    <th class="text-center"> Access </th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr v-for="(staff, index) in user_staff" :key="index">
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            @if($user->gender == 'm')
                                                Laki-Laki
                                            @else
                                                Perempuan
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox" name="check[]" value="{{ $user->id }}" @if(in_array($user->id, $checked)) checked @endif>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="{{ $role->id }}" name="roles" id="{{ $role->id }}" @if(count($user->roles)) @if($user->roles[0]->id == $role->id) checked @endif @endif>
                                <label class="form-check-label" for="{{ $role->id }}">{{ $role->name }}</label>
                            </div> --}}
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <button class="btn btn-primary shadow-sm rounded-sm" type="submit">UPDATE</button>
                            <button class="btn btn-warning shadow-sm rouned-sm ms-3" type="reset">RESET</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4" id="question">
        <div class="row">

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


@endsection
