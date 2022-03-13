@extends('layouts.app')
@section('content')
    <section style="background-color: #eee;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8" style="margin-top: 45px">
                    <div class="card">
                        <div class="card-header">Ask a Question</div>
                        <div class="card-body">
                            <form action="{{ route('questions.update', $questions->id) }}" method="post"
                                autocomplete="off">
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
                                @if (Auth::guard('web')->check())
                                    <div class="form-group">
                                        <label for="name">question</label>
                                        <input type="text" name="question" class="form-control"
                                            value="{{ $questions->question }}" placeholder="Enter Your question">
                                        <span class="text-danger">
                                            @error('question')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                @elseif (Auth::guard('employee')->check())
                                    <div class="form-group">
                                        <label for="name">question</label>
                                        <input type="text" name="question" class="form-control"
                                            value="{{ $questions->question }}" placeholder="Enter Your question">
                                        <span class="text-danger">
                                            @error('question')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Answer</label>
                                        <input type="text" name="answer" class="form-control"
                                            value="{{ $questions->answer }}" placeholder="Enter Your answer">
                                        <span class="text-danger">
                                            @error('answer')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                @elseif (Auth::guard('admin')->check())
                                    <div class="form-group">
                                        <label for="name">question</label>
                                        <input type="text" name="question" class="form-control"
                                            value="{{ $questions->question }}" placeholder="Enter Your question">
                                        <span class="text-danger">
                                            @error('question')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Answer</label>
                                        <input type="text" name="answer" class="form-control"
                                            value="{{ $questions->answer }}" placeholder="Enter Your answer">
                                        <span class="text-danger">
                                            @error('answer')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                @endif
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
    </section>
@endsection
