@extends('layouts.app')
@section('content')
<section style="background-color: #eee;">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css"
        rel="stylesheet" />
    <script>
        $.fn.poshytip = {
            defaults: null
        }
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js">
    </script>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-white rounded-3 p-2 mb-4">
                        <ol class="breadcrumb bg-light mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="mb-md-0">
                                    <div class="card-body">
                                        <div class="alert alert-dark" role="alert">
                                            Warning : By deleting a user , you'll delete all the records
                                            in the following tables :
                                            desires, applieddesires, pre_decision, final_decision,
                                            questions!
                                        </div>
                                        <div class="table-responsive">
                                            <table
                                                class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                @csrf
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">ID</th>
                                                        <th>Name</th>
                                                        <th class="text-center">Email</th>
                                                        <th class="text-center">Phone</th>
                                                        <th class="text-center">Address</th>
                                                        <th class="text-center">Englsih</th>
                                                        <th class="text-center">Total</th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($userstodashboard as $userd)
                                                        <tr class="bg-white">
                                                            <td class="text-center updateuserd">
                                                                {{ $userd->id }}
                                                            </td>
                                                            <td>
                                                                <div class="widget-heading text-dark">
                                                                    <a href="" class="updateuserd" data-name="name"
                                                                        data-type="text" data-pk="{{ $userd->id }}"
                                                                        data-title="Enter name">{{ $userd->name }}</a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center text-dark">
                                                                <a href="" class="updateuserd" data-name="email"
                                                                    data-type="email" data-pk="{{ $userd->id }}"
                                                                    data-title="Enter name">{{ $userd->email }}</a>
                                                            </td>
                                                            <td class="text-center text-dark">
                                                                <a href="" class="updateuserd" data-name="phone"
                                                                    data-type="number" data-pk="{{ $userd->id }}"
                                                                    data-title="Enter name">{{ $userd->phone }}</a>
                                                            </td>
                                                            <td class="text-center text-dark">
                                                                <a href="" class="updateuserd" data-name="address"
                                                                    data-type="text" data-pk="{{ $userd->id }}"
                                                                    data-title="Enter name">{{ $userd->address }}</a>
                                                            </td>
                                                            <td class="text-center text-dark">
                                                                <a href="" class="updateuserd" data-name="englishDegree"
                                                                    data-type="number" data-pk="{{ $userd->id }}"
                                                                    data-title="Enter name">{{ $userd->englishDegree }}</a>
                                                            </td>
                                                            <td class="text-center text-dark">
                                                                <a href="" class="updateuserd"
                                                                    data-name="highSchoolTotalMarks" data-type="number"
                                                                    data-pk="{{ $userd->id }}"
                                                                    data-title="Enter name">{{ $userd->highSchoolTotalMarks }}</a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a class="btn btn-danger btn-sm"
                                                                    href="{{ route('admin.destroyUser', $userd->id) }}">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-block text-right card-footer"><a
                                                class="btn-wide btn btn-success btn-sm"
                                                href="{{ route('admin.createuser') }}">Add New User</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $.fn.editable.defaults.mode = 'inline';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
        $('.updateuserd').editable({

            url: "{{ route('admin.userdUpdate') }}",
            type: 'text',
            pk: 1,
            name: 'name',
            title: 'Enter name',

            type: 'email',
            pk: 1,
            name: 'email',
            title: 'Enter email',

            type: 'number',
            pk: 1,
            name: 'phone',
            title: 'Enter phone',

            type: 'number',
            pk: 1,
            name: 'empId',
            title: 'Enter empId',
        });
    </script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
    </script>
@endsection
