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
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ Auth::guard('employee')->user()->name }}</h5>
                            <p class="text-muted mb-1">{{ Auth::guard('employee')->user()->email }}</p>
                            <p class="text-muted mb-1">{{ Auth::guard('employee')->user()->gender }}</p>


                        </div>
                    </div>
                    <!--<div class="card mb-4 mb-lg-0">
                                                            <div class="card-body p-0">
                                                                <div class="row">
                                                                    <div class="mb-md-0">
                                                                        <div class="card-body">
                                                                            <p class="breadcrumb bg-light text-small">Grades Average</p>
                                                                            <div class="row">
                                                                                <div class="col-sm-6">

                                                                                    <p class="mb-0">English Grade</p>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <p class="text-muted text-right mb-0">
                                                                                        <span class="text-orange">/ 60</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <p class="mb-0">Total Marks</p>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <p class="text-muted text-right mb-0">
                                                                                        <span class="text-orange">/ 300</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>

                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <p class="mb-0">Average</p>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <p class="text-muted text-right mb-0">
                                                                                        / <span class="text-orange">20</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="breadcrumb bg-light text-small">Account Information</p>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ Auth::guard('employee')->user()->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ Auth::guard('employee')->user()->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ Auth::guard('employee')->user()->empId }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ Auth::guard('employee')->user()->phone }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--- faqs -->
                </div>
            </div>
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12 mb-md-0">
                            <div class="card-body">
                                <p class="breadcrumb bg-light text-small">Applied Students</p>
                                <table class="table table-light table-striped">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">English Grade</th>
                                        <th class="text-center">Total Grades</th>
                                        <th class="text-center">Average</th>
                                        <th class="text-center">firstDesire</th>
                                        <th class="text-center">secondDesire</th>
                                        <th class="text-center">thirdDesire</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                    @foreach ($users as $blabla)
                                        <tr>
                                            <th class="text-center">{{ $blabla->id }}</th>
                                            <th class="text-center">{{ $blabla->name }}</th>
                                            <th class="text-center">{{ $blabla->englishDegree }}</th>
                                            <th class="text-center">{{ $blabla->highSchoolTotalMarks }}</th>
                                            <th class="text-center">
                                                {{ round(((($blabla->englishDegree / 60) * 100 + ($blabla->highSchoolTotalMarks / 300) * 100) / 200) * 100, 1) }}
                                                %

                                            </th>
                                            <th class="text-center">{{ $blabla->firstDesire }}</th>
                                            <th class="text-center">{{ $blabla->secondDesire }}</th>
                                            <th class="text-center">{{ $blabla->thirdDesire }}</th>
                                            <th class="text-center">{{ $blabla->status }}</th>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="card-footer text-right">
                                    <a href="{{ route('employee.registered') }}" class="btn btn-apply">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
