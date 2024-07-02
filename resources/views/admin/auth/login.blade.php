@extends('admin.layouts.auth')

@section('content')
    <div class="vw-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow rounded">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.login.submit') }}" >
                    @csrf
                    <div class="d-flex justify-content-center">
                        <h2 class="fw-bolder fst-italic text-primary">Pinnacle</h2>
                    </div>
                    <h3>SignIn</h3>
                    <p class="m-0"><small>Only Admin can signIn.</small></p>
                    @if (session('error'))
                        <p class="fw-bold text-danger">{{ session('error') }}</p>
                    @endif
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old("email") }}" id="email" class="form-control">
                            @if($errors->has('email'))
                                <div class="fw-bold text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" value="{{ old("password") }}" id="password" class="form-control">
                            @if($errors->has('password'))
                                <div class="fw-bold text-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection