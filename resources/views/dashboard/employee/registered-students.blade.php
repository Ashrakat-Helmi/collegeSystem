@extends('layouts.app')
@section('content')
    <section style="background-color: #eee;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-white rounded-3 p-2 mb-4">
                        <ol class="breadcrumb bg-light mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Employee</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Employee Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">

                    <!--- faqs -->
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="mb-md-0">
                                    <div class="card-body">
                                        <p class="breadcrumb bg-light text-small">Top Students Ordered By Average</p>
                                        <table class="table table-light table-striped">
                                            <tr>
                                                <th colspan="1" class="text-center">#</th>
                                                <th colspan="1" class="text-center">Name</th>
                                                <th colspan="1" class="text-center">English Grade</th>
                                                <th colspan="1" class="text-center">Total Grades</th>
                                                <th colspan="1" class="text-center">Average</th>
                                                <th colspan="1" class="text-center">firstDesire</th>
                                                <th colspan="1" class="text-center">secondDesire</th>
                                                <th colspan="1" class="text-center">thirdDesire</th>
                                                <th colspan="1" class="text-center">Status</th>
                                                <th colspan="3" class="text-center">Action</th>
                                            </tr>
                                            @foreach ($users as $data)
                                                <tr class="align-item-center">
                                                    <th class="text-center">{{ $data->id }}</th>
                                                    <th class="text-center">{{ $data->name }}</th>
                                                    <th class="text-center">{{ $data->englishDegree }}</th>
                                                    <th class="text-center">{{ $data->highSchoolTotalMarks }}</th>
                                                    <th class="text-center">
                                                        {{ round(((($data->englishDegree / 60) * 100 + ($data->highSchoolTotalMarks / 300) * 100) / 200) * 100,1) }}
                                                        %
                                                    </th>
                                                    <th class="text-center">{{ $data->firstDesire }}</th>
                                                    <th class="text-center">{{ $data->secondDesire }}</th>
                                                    <th class="text-center">{{ $data->thirdDesire }}</th>
                                                    <th class="text-center">{{ $data->status }}</th>
                                                    <th colspan="2"
                                                        class="d-flex justify-content-between m-1 p-1 w-20 text-center">
                                                        <form action="{{ route('employee.approve', $data->id) }}"
                                                            method="PUT" enctype="multipart/form-data">
                                                            @csrf
                                                            <a href="{{ route('employee.approve', $data->id) }}"
                                                                class="text-light btn bg-success"><i
                                                                    class="fa-solid fa-check"></i></a>
                                                        </form>
                                                        <form action="{{ route('employee.reject', $data->id) }}"
                                                            method="PUT" enctype="multipart/form-data">
                                                            @csrf
                                                            <a href="{{ route('employee.reject', $data->id) }}"
                                                                class="text-light btn bg-danger"><i
                                                                    class="fa-solid fa-xmark"></i></a>
                                                        </form>

                                                    </th>

                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
