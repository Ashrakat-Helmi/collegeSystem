@extends('layouts.app')
@section('content')
    @if (Auth::guard('web')->check())
        <section style="background-color: #eee;">
            <div class="container col-md-8 my-4">
                <div class="container col-md-12 my-4">
                    <div class="row">
                        <div class="alert alert-success text-center">Already Submitted , we're
                            processing your question and will be answering soon!</div>
                        <a class="btn btn-dark text-center my-2" href="{{ route('user.home') }}">Dashboard</a>
                        <a class="btn btn-apply btn-block text-center" href="{{ route('questions.create') }}">Ask a New
                            Question!</a>
                    </div>
                </div>
                <div class="card bg-light text-white">
                    <div class="card-body bg-light text-white">
                        <table class="table table-light table-striped">
                            <tr>
                                <th class="text-center" colspan="1">Question</th>
                                <th class="text-center" colspan="4">Answer</th>
                                <th class="text-center" colspan="1">Action</th>
                            </tr>
                            @foreach ($questions as $data)
                                <tr>
                                    <th class="text-center" colspan="1">{{ $data->question }}</th>
                                    <th class="text-center text-orange" colspan="4">{{ $data->answer }}</th>
                                    <th class="text-center mx-1"><a href="{{ route('questions.edit', $data->id) }}"
                                            class="btn btn-success"><i class="text-light fa-solid fa-pen-to-square"></i></a>

                                        <a href="{{ route('questions.destroy', $data->id) }}" class="btn btn-danger"><i
                                                class="text-light fa-solid fa-trash"></i></a>
                                    </th>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>
        @elseif (Auth::guard('admin')->check())
        <section style="background-color: #eee;">
            <div class="container col-md-8 my-4">
                <div class="container col-md-12 my-4">
                    <div class="row">
                        <div class="alert alert-success text-center">Already Submitted , we're
                            processing your question and will be answering soon!</div>
                        <a class="btn btn-dark text-center my-2" href="{{ route('user.home') }}">Dashboard</a>
                        <a class="btn btn-apply btn-block text-center" href="{{ route('questions.create') }}">Ask a New
                            Question!</a>
                    </div>
                </div>
                <div class="card bg-light text-white">
                    <div class="card-body bg-light text-white">
                        <table class="table table-light table-striped">
                            <tr>
                                <th class="text-center" colspan="1">Question</th>
                                <th class="text-center" colspan="4">Answer</th>
                                <th class="text-center" colspan="1">Action</th>
                            </tr>
                            @foreach ($questions as $data)
                                <tr>
                                    <th class="text-center" colspan="1">{{ $data->question }}</th>
                                    <th class="text-center text-orange" colspan="4">{{ $data->answer }}</th>
                                    <th class="text-center mx-1"><a href="{{ route('questions.edit', $data->id) }}"
                                            class="btn btn-success"><i class="text-light fa-solid fa-pen-to-square"></i></a>

                                        <a href="{{ route('questions.destroy', $data->id) }}" class="btn btn-danger"><i
                                                class="text-light fa-solid fa-trash"></i></a>
                                    </th>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>
        @elseif (Auth::guard('employee')->check())
        <section style="background-color: #eee;">
            <div class="container col-md-8 my-4">
                <div class="container col-md-12 my-4">
                    <div class="row">
                        <div class="alert alert-success text-center">Already Submitted , we're
                            processing your question and will be answering soon!</div>
                        <a class="btn btn-dark text-center my-2" href="{{ route('user.home') }}">Dashboard</a>
                        <a class="btn btn-apply btn-block text-center" href="{{ route('questions.create') }}">Ask a New
                            Question!</a>
                    </div>
                </div>
                <div class="card bg-light text-white">
                    <div class="card-body bg-light text-white">
                        <table class="table table-light table-striped">
                            <tr>
                                <th class="text-center" colspan="1">Question</th>
                                <th class="text-center" colspan="4">Answer</th>
                                <th class="text-center" colspan="1">Action</th>
                            </tr>
                            @foreach ($questions as $data)
                                <tr>
                                    <th class="text-center" colspan="1">{{ $data->question }}</th>
                                    <th class="text-center text-orange" colspan="4">{{ $data->answer }}</th>
                                    <th class="text-center mx-1"><a href="{{ route('questions.edit', $data->id) }}"
                                            class="btn btn-success"><i class="text-light fa-solid fa-pen-to-square"></i></a>

                                        <a href="{{ route('questions.destroy', $data->id) }}" class="btn btn-danger"><i
                                                class="text-light fa-solid fa-trash"></i></a>
                                    </th>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>

    @endif

@endsection
