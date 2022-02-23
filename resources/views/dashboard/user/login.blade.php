@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 45px">
                <div class="card">
                    <div class="card-header">Student's Login</div>
                    <div class="card-body">
                        <form action="{{ route('user.check') }}" method="POST" autocomplete="off">
                            @if (Session::get('failed'))
                                <div class="alert alert-danger">
                                    {{ session::get('failed') }}
                                </div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                    placeholder="Enter Your Email Address">
                                <span class="text-danger">@error('email')
                                        {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control"
                                    value="{{ old('password') }}" placeholder="Enter Your password">
                                <span class="text-danger">@error('password')
                                        {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <br>
                            <a href="{{ route('user.register') }}">Create a new Account</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
