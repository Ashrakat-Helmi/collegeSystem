@extends('layouts.app')
@section('content')
    <section class="my-5" style="background-color: #eee;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Ask a Question</div>
                        <div class="card-body">
                            <form action="{{ route('questions.store') }}" method="post" autocomplete="off">
                                @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::get('failed'))
                                    <div class="alert alert-danger">
                                        {{ session::get('failed') }}
                                    </div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label for="name">question</label>
                                    <input type="text" name="question" class="form-control"
                                        value="{{ old('question') }}" placeholder="Enter Your question">
                                    <span class="text-danger">
                                        @error('question')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-apply btn-block">Submit</button>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
