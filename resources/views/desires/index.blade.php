@extends('layouts.app')
@section('content')
    <section style="background-color: #eee;">
        <div class="container col-md-8 my-4">
            <div class="container col-md-12 my-4">
                <div class="row">
                    <div class="alert alert-danger text-center">Already Submitted , we're
                        processing your application!</div>
                    <a class="btn btn-dark text-center" href="{{ route('user.home') }}">Dashboard</a>
                </div>
            </div>
            <div class="card bg-light text-white">
                <div class="card-body bg-light text-white">
                    <table class="table table-light table-striped">
                        <tr class="w-100">
                            <th class="text-center">#</th>
                            <th class="text-center">student</th>
                            <th class="text-center">1st</th>
                            <th class="text-center">2nd</th>
                            <th class="text-center">3rd</th>
                            <th class="text-center">English</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Average</th>
                        </tr>
                        @foreach ($desires as $data)
                            <tr>
                                <th class="text-center">{{ $data->id }}</th>
                                <th class="text-center">{{ auth()->user()->name }}</th>
                                <th class="text-center">{{ $data->firstDesire }}</th>
                                <th class="text-center">{{ $data->secondDesire }}</th>
                                <th class="text-center">{{ $data->thirdDesire }}</th>
                                @foreach ($drives as $blabla2)
                                    <th class="text-center">{{ $blabla2->englishDegree }}</th>
                                    <th class="text-center">{{ $blabla2->highSchoolTotalMarks }}</th>
                                @endforeach
                                @foreach ($ESNAME as $blabla)
                                    <th class="text-center text-muted">{{ $blabla->status }}</th>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
