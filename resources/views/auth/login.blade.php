@extends('layouts.app')

@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-xl-6 col-lg-6 col-md-6 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-primary">
                                <div class="card-header pb-0 text-center">
                                    <h2>DINAS PERHUBUNGAN KABUPATEN KUNINGAN</h2>
                                    <h4 class="font-weight-bolder">Login</h4>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login.perform') }}">
                                        @csrf
                                        @method('post')
                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
                                            <label for="email">User Name</label>
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="form-floating mt-3 mb-3">
                                            <input type="password" id="password" name="password" class="form-control">
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
