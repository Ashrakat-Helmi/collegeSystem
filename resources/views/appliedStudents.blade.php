@extends('layouts.app')
@section('content')
    <section style="background-color: #eee;">
        <div class="container pt-2">
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
            <div class="row justify-content-center pt-2">
                <div class="col-md-8">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="mb-md-0">
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <h6 class="text-center mb-3">First Desire's Counter</h6>
                                                <tr>
                                                    <th class="text-center" scope="col-1">BIS</th>
                                                    <th class="text-center" scope="col-1">FMI</th>
                                                    <th class="text-center" scope="col-1">ES</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($BISNAME as $name)
                                                    <tr>
                                                        <th class="text-center">{{ $BISCOUNTER }}</th>
                                                        <td class="text-center">{{ $FMICOUNTER }}</td>
                                                        <td class="text-center">{{ $ESCOUNTER }}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="mb-md-0">
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <h6 class="text-center mb-3">Total Applied Students</h6>

                                                <tr>
                                                    <th class="text-center text-orange" scope="col-1">Total Students</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ESNAME as $name3)
                                                    <tr>

                                                        <td class="text-center text-orange">
                                                            {{ $ESCOUNTER + $BISCOUNTER + $ESCOUNTER }}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
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
