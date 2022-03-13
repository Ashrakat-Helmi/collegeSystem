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
                    <div class="card mb-4 mb-lg-0">
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
                    </div>
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
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="mb-md-0">
                                    <div class="card-body">
                                        <p class="breadcrumb bg-light text-small">Frequently Asked Questions</p>
                                        <table class="table table-light table-striped">
                                            <tr>
                                                <th class="text-center" colspan="1">Question</th>
                                                <th class="text-center" colspan="4">Answer</th>
                                                <th class="text-center" colspan="1">Action</th>
                                            </tr>
                                            @foreach ($users as $data)
                                                <tr>
                                                    <th class="text-center" colspan="1">{{ $data->name }}</th>
                                                    <th class="text-center text-orange" colspan="4">{{ $data->email }}
                                                    </th>
                                                    <th class="text-center mx-1"><a
                                                            href="{{ route('questions.edit', $data->id) }}"
                                                            class="btn btn-success"><i
                                                                class="text-light fa-solid fa-pen-to-square"></i></a>

                                                        <a href="{{ route('questions.destroy', $data->id) }}"
                                                            class="btn btn-danger"><i
                                                                class="text-light fa-solid fa-trash"></i></a>
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
