@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Roles'])
    <div class="card shadow-lg mx-4 mt-8" id="user_info">
        <div class="card-body p-3">
            <div class="row gx-4">
                <form>
                    <div class="input-group mb-3">
                        <a href="/role/create" class="btn btn-primary input-group-text"> <i class="fa fa-plus-circle me-2"></i> NEW</a>
                        <input type="text" class="form-control input-group-text mb-3" placeholder="search by user name . . .">

                        <button class="btn btn-primary input-group-text" type="submit"> <i class="fa fa-search me-2"></i> SEARCH</button>
                    </div>
                </form>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center"> Role Name </th>
                            {{-- <th scope="col" style="width:20%" class="text-center">Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $u)
                        <tr>
                            <td>{{ $u->name }}</td>
                            {{-- <td class="text-center"> --}}
                                {{-- @if($u->name == 'Judge')
                                    <a href="{{ './edit/'.$u->id }}" class="btn btn-success btn-sm me-2"><i class="fa fa-pencil-alt me-1"></i> EDIT</a>
                                @endif --}}
                                {{-- <a href="{{ './edit/'.$u->slug }}" class="btn btn-success btn-sm me-2"><i class="fa fa-pencil-alt me-1"></i> EDIT</a> --}}
                                    {{-- <a href="{{ route('user.edit', $u->slug) }}" class="btn btn-success btn-sm me-2"><i class="fa fa-pencil-alt me-1"></i> EDIT</a> --}}
                            {{-- </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4" id="question">
        @include('layouts.footers.auth.footer')
    </div>
@endsection
