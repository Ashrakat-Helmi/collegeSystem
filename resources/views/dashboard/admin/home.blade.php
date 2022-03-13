@extends('layouts.app')
@section('content')
    <section style="background-color: #eee;">
        <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
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
        </head>

        <body>

            <div class="app-container app-theme-white body-tabs-shadow fixed-header">
                <div class="app-main">
                    <div class="app-sidebar sidebar-shadow">
                        <div class="app-header__logo">
                            <h1 class="text-white">HU</h1>
                            <div class="header__pane ml-auto">
                                <div>
                                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                        data-class="closed-sidebar">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="app-header__mobile-menu">
                            <div>
                                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="app-header__menu">
                            <span>
                                <button type="button"
                                    class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                        </div>
                        <div class="scrollbar-sidebar">
                            <div class="app-sidebar__inner">
                                <ul class="vertical-nav-menu">
                                    <li class="app-sidebar__heading">Dashboard</li>
                                    <li>
                                        <a href="index.html" class="mm-active">
                                            <i class="metismenu-icon pe-7s-home"></i>
                                            Homepage
                                        </a>
                                    </li>

                                    <li class="app-sidebar__heading">Students</li>
                                    <li>
                                        <a href="{{ route('employee.registered') }}">
                                            <i class="metismenu-icon pe-7s-note2">
                                            </i>Applications Controller
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon pe-7s-study"></i>
                                            Applied Students
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('appliedStudents.index') }}">
                                                    <i class="metismenu-icon"></i>
                                                    <i class="mr-2 text-right-icon pe-7s-info"></i>
                                                    Counter
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('questions.index') }}">
                                                    <i class="mr-2 text-right-icon pe-7s-help1"></i>
                                                    Questions
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="app-sidebar__heading">Control Panel</li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon pe-7s-config"></i>
                                            Admins
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('admin.admins') }}">
                                                    <i class="mr-2 text-right-icon pe-7s-users"></i>
                                                    All Admins
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.createadmin') }}">
                                                    <i class="mr-2 text-right-icon pe-7s-add-user"></i>
                                                    </i>Add
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon pe-7s-portfolio"></i>
                                            Employees
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('admin.employees') }}">
                                                    <i class="mr-2 text-right-icon pe-7s-users"></i>
                                                    All Employees
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.createemp') }}">
                                                    <i class="mr-2 text-right-icon pe-7s-add-user"></i>
                                                    </i>Add
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon pe-7s-user"></i>
                                            Users
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('admin.users') }}">
                                                    <i class="mr-2 text-right-icon pe-7s-users"></i>
                                                    All Users

                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.createuser') }}">
                                                    <i class="mr-2 text-right-icon pe-7s-add-user"></i>
                                                    </i>Add
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--<li class="app-sidebar__heading">SOCIAL MEDIA</li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <i class="metismenu-icon pe-7s-comment"></i>
                                                                                    Follow Us
                                                                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                                                                </a>
                                                                                <ul>
                                                                                    <li>
                                                                                        <a href="">
                                                                                            <i class="mr-3 text-right-icon fab fa-facebook-f"></i>
                                                                                            Facebook
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="">
                                                                                            <i class="mr-2 text-right-icon fab fa-twitter"></i>
                                                                                            </i>Twitter
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="app-main__outer">
                        <div class="app-main__inner">
                            <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-danger">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-white">Total Admins</div>
                                                <div class="text-white opacity-75">Total Registered Admins</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white">
                                                    <span class="ml-5">{{ $adminsCOUNTER }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-orange">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-white">Total Employees</div>
                                                <div class="text-white opacity-75">Total Registered Employees</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white">
                                                    <span class="ml-5">{{ $employeesCOUNTER }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-primary">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left text-white">
                                                <div class="widget-heading text-white">Total Users</div>
                                                <div class="text-white opacity-75">Total Registered Users</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white"><span
                                                        class="ml-5">{{ $USERSCOUNTER }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="mb-3 card">
                                        <div class="card-header-tab card-header-tab-animation card-header">
                                            <div class="card-header-title">
                                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                                Fake Chart
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="tabs-eg-77">
                                                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div
                                                                class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                <canvas id="canvas"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="mb-3 card">
                                        <div class="card-header-tab card-header-tab-animation card-header">
                                            <div class="card-header-title">
                                                Top AVG Students
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="scroll-area-md">
                                                <div class="scrollbar-container">
                                                    @foreach ($users26 as $data)
                                                        <ul
                                                            class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-5">
                                                                            <div class="widget-heading text-uppercase">
                                                                                {{ $data->name }}</div>
                                                                            <div class="widget-subheading">
                                                                                {{ $data->firstDesire }}
                                                                            </div>
                                                                            <div class="widget-subheading">
                                                                                English <span
                                                                                    class="text-danger">{{ $data->englishDegree }}
                                                                                </span>-
                                                                                Total <span
                                                                                    class="text-orange">{{ $data->highSchoolTotalMarks }}</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <span
                                                                                class="display-6 text-success">{{ round(((($data->englishDegree / 60) * 100 + ($data->highSchoolTotalMarks / 300) * 100) / 200) * 100, 1) }}</span>
                                                                            <small class="text-danger">
                                                                                <i class="text-dark fa fa-percent"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="main-card mb-3 card text-center">
                                            <div class="card-head mx-5 mt-2">
                                                <nav class="mt-4 text-center">
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                        <a class="nav-link active" id="nav-first-tab" data-toggle="tab"
                                                            href="#nav-first" role="tab" aria-controls="nav-first"
                                                            aria-selected="false"><span
                                                                class="text-primary">Users</span></a>
                                                        <a class="nav-link" id="nav-second-tab" data-toggle="tab"
                                                            href="#nav-second" role="tab" aria-controls="nav-second"
                                                            aria-selected="false"><span
                                                                class="text-orange">Employees</span></a>
                                                        <a class="nav-link" id="nav-third-tab" data-toggle="tab"
                                                            href="#nav-third" role="tab" aria-controls="nav-third"
                                                            aria-selected="true"><span
                                                                class="text-danger">Admins</span></a>
                                                    </div>
                                                </nav>
                                            </div>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade" id="nav-third" role="tabpanel"
                                                    aria-labelledby="nav-third-tab">
                                                    <div class="col-md-12">
                                                        <div class="mb-md-0">
                                                            <div class="card-body">
                                                                <p class="breadcrumb alert alert-dark text-small">Tab the
                                                                    cell
                                                                    to edit.
                                                                </p>
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
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($admins as $admin)
                                                                                <tr class="bg-white">
                                                                                    <td class="text-center text-dark">
                                                                                        {{ $admin->id }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="widget-heading text-dark">
                                                                                            <a href=""
                                                                                                class="update"
                                                                                                data-name="name"
                                                                                                data-type="text"
                                                                                                data-pk="{{ $admin->id }}"
                                                                                                data-title="Enter name">{{ $admin->name }}</a>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center text-dark">
                                                                                        <a href="" class="update"
                                                                                            data-name="email"
                                                                                            data-type="email"
                                                                                            data-pk="{{ $admin->id }}"
                                                                                            data-title="Enter name">{{ $admin->email }}</a>
                                                                                    </td>
                                                                                    <td class="text-center text-dark">
                                                                                        <a href="" class="update"
                                                                                            data-name="phone"
                                                                                            data-type="number"
                                                                                            data-pk="{{ $admin->id }}"
                                                                                            data-title="Enter name">{{ $admin->phone }}</a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="d-block text-right card-footer">
                                                                    <a href="{{ route('admin.createadmin') }}"
                                                                        class="btn-wide btn btn-success btn-sm">Add New
                                                                        Admin</a>
                                                                    <a href="{{ route('admin.admins') }}"
                                                                        class="btn-wide btn btn-orange text-white btn-sm">View
                                                                        All
                                                                        Admins</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-second" role="tabpanel"
                                                    aria-labelledby="nav-second-tab">
                                                    <div class="col-md-12">
                                                        <div class="mb-md-0">
                                                            <div class="card-body">
                                                                <p class="breadcrumb alert alert-dark text-small">Tab the
                                                                    cell
                                                                    to edit.
                                                                </p>
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
                                                                                <th class="text-center">Emp Id</th>
                                                                                <th class="text-center">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($employees as $employee)
                                                                                <tr class="bg-white">
                                                                                    <td class="text-center text-dark">
                                                                                        {{ $employee->id }}</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="widget-heading text-dark">
                                                                                            <a href=""
                                                                                                class="updateEmployee"
                                                                                                data-name="name"
                                                                                                data-type="text"
                                                                                                data-pk="{{ $employee->id }}"
                                                                                                data-title="Enter name">{{ $employee->name }}</a>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center text-dark">
                                                                                        <a href="" class="updateEmployee"
                                                                                            data-name="email"
                                                                                            data-type="email"
                                                                                            data-pk="{{ $employee->id }}"
                                                                                            data-title="Enter email">{{ $employee->email }}</a>
                                                                                    </td>
                                                                                    <td class="text-center text-dark">
                                                                                        <a href="" class="updateEmployee"
                                                                                            data-name="phone"
                                                                                            data-type="number"
                                                                                            data-pk="{{ $employee->id }}"
                                                                                            data-title="Enter phone">{{ $employee->phone }}</a>
                                                                                    </td>
                                                                                    <td class="text-center text-dark">
                                                                                        <a href="" class="updateEmployee"
                                                                                            data-name="empId"
                                                                                            data-type="number"
                                                                                            data-pk="{{ $employee->id }}"
                                                                                            data-title="Enter empId">{{ $employee->empId }}</a>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <a class="btn btn-danger btn-sm"
                                                                                            href="{{ route('admin.destroyEmployee', $employee->id) }}">Delete</a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="d-block text-right card-footer">
                                                                    <a href="{{ route('admin.createemp') }}"
                                                                        class="btn-wide btn btn-success btn-sm">Add New
                                                                        Employee</a>
                                                                    <a href="{{ route('admin.employees') }}"
                                                                        class="btn-wide btn btn-orange text-white btn-sm">View
                                                                        All
                                                                        Employees</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade show active" id="nav-first" role="tabpanel"
                                                    aria-labelledby="nav-first-tab">
                                                    <div class="col-md-12">
                                                        <div class="mb-md-0">
                                                            <div class="card-body">
                                                                <div class="alert alert-dark text-white" role="alert">
                                                                    Warning : By deleting a user , you'll delete all the
                                                                    records
                                                                    in the following tables :
                                                                    desires, applieddesires, pre_decision,
                                                                    final_decision,
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
                                                                                    <td class="text-center text-dark">
                                                                                        {{ $userd->id }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="widget-heading text-dark">
                                                                                            <a href=""
                                                                                                class="updateuserd"
                                                                                                data-name="name"
                                                                                                data-type="text"
                                                                                                data-pk="{{ $userd->id }}"
                                                                                                data-title="Enter name">{{ $userd->name }}</a>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center text-dark">
                                                                                        <a href="" class="updateuserd"
                                                                                            data-name="email"
                                                                                            data-type="email"
                                                                                            data-pk="{{ $userd->id }}"
                                                                                            data-title="Enter name">{{ $userd->email }}</a>
                                                                                    </td>
                                                                                    <td class="text-center text-dark">
                                                                                        <a href="" class="updateuserd"
                                                                                            data-name="phone"
                                                                                            data-type="number"
                                                                                            data-pk="{{ $userd->id }}"
                                                                                            data-title="Enter name">{{ $userd->phone }}</a>
                                                                                    </td>
                                                                                    <td class="text-center text-dark">
                                                                                        <a href="" class="updateuserd"
                                                                                            data-name="address"
                                                                                            data-type="text"
                                                                                            data-pk="{{ $userd->id }}"
                                                                                            data-title="Enter name">{{ $userd->address }}</a>
                                                                                    </td>
                                                                                    <td class="text-center text-dark">
                                                                                        <a href="" class="updateuserd"
                                                                                            data-name="englishDegree"
                                                                                            data-type="number"
                                                                                            data-pk="{{ $userd->id }}"
                                                                                            data-title="Enter name">{{ $userd->englishDegree }}</a>
                                                                                    </td>
                                                                                    <td class="text-center text-dark">
                                                                                        <a href="" class="updateuserd"
                                                                                            data-name="highSchoolTotalMarks"
                                                                                            data-type="number"
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
                                                                <div class="d-block text-right card-footer">
                                                                    <a href="{{ route('admin.createuser') }}"
                                                                        class="btn-wide btn btn-success btn-sm">Add New
                                                                        User</a>
                                                                    <a href="{{ route('admin.users') }}"
                                                                        class="btn-wide btn btn-orange text-white btn-sm">View
                                                                        All
                                                                        User</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card mb-3 widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Total Questions</div>
                                                            <div class="widget-subheading">Not answered Questions!
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-success"><span
                                                                    class="ml-5">{{ $QuestionsCOUNTER }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card mb-3 widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Total Applied Students</div>
                                                            <div class="widget-subheading">Total Applied Students</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-warning">
                                                                <span
                                                                    class="ml-5">{{ $BISCOUNTER + $FMICOUNTER + $ESCOUNTER }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card mb-3 widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Total Posts</div>
                                                            <div class="widget-subheading">Total Blog Posts</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-danger"><span
                                                                    class="ml-5">{{ $newsCOUNTER }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--- faqs -->
                                        <div class="card mb-4 mb-lg-0">
                                            <div class="card p-0">
                                                <div class="card-head mx-5 mt-2">
                                                    <nav class="mt-4 text-center">
                                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                            <a class="nav-link active" id="nav-applications-tab"
                                                                data-toggle="pill" href="#nav-applications" role="tab"
                                                                aria-controls="nav-applications" aria-selected="true"><span
                                                                    class="text-dark">Applications</span></a>
                                                            <a class="nav-link" id="nav-approved-tab"
                                                                data-toggle="pill" href="#nav-approved" role="tab"
                                                                aria-controls="nav-approved" aria-selected="true"><span
                                                                    class="text-danger">Approved</span></a>
                                                            <a class="nav-link" id="nav-rejected-tab"
                                                                data-toggle="pill" href="#nav-rejected" role="tab"
                                                                aria-controls="nav-rejected" aria-selected="false"><span
                                                                    class="text-orange">Rejected</span></a>
                                                            <a class="nav-link" id="nav-pending-tab"
                                                                data-toggle="pill" href="#nav-pending" role="tab"
                                                                aria-controls="nav-pending" aria-selected="false"><span
                                                                    class="text-primary">Pending</span></a>
                                                        </div>
                                                    </nav>
                                                </div>
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade" id="nav-pending" role="tabpanel"
                                                        aria-labelledby="nav-pending-tab">
                                                        <div class="col-md-12">
                                                            <div class="mb-md-0">
                                                                <div class="card-body">
                                                                    <p class="breadcrumb alert alert-dark text-small">
                                                                        Accept /
                                                                        Reject Pending Students</p>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-light table-striped">
                                                                            <tr>
                                                                                <th colspan="1" class="text-center">
                                                                                    #
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Name
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    English
                                                                                    Grade</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Total
                                                                                    Grades</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Average
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    firstDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    secondDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    thirdDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Status
                                                                                </th>
                                                                                <th colspan="3" class="text-center">
                                                                                    Action
                                                                                </th>
                                                                            </tr>
                                                                            @foreach ($users23 as $pending)
                                                                                <tr class="align-item-center">
                                                                                    <th class="text-center">
                                                                                        {{ $pending->id }}</th>
                                                                                    <th class="text-center">
                                                                                        {{ $pending->name }}</th>
                                                                                    <th class="text-center">
                                                                                        {{ $pending->englishDegree }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $pending->highSchoolTotalMarks }}
                                                                                    </th>
                                                                                    <th class="text-center text-orange">
                                                                                        {{ round(((($pending->englishDegree / 60) * 100 + ($pending->highSchoolTotalMarks / 300) * 100) / 200) * 100,1) }}
                                                                                        %
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $pending->firstDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $pending->secondDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $pending->thirdDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $pending->status }}</th>
                                                                                    <th colspan="2"
                                                                                        class="d-flex justify-content-between m-1 p-1 w-20 text-center">
                                                                                        <form
                                                                                            action="{{ route('employee.approve', $pending->id) }}"
                                                                                            method="PUT"
                                                                                            enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <a href="{{ route('employee.approve', $pending->id) }}"
                                                                                                class="text-light btn bg-success"><i
                                                                                                    class="fa-solid fa-check"></i></a>
                                                                                        </form>
                                                                                        <form
                                                                                            action="{{ route('employee.reject', $pending->id) }}"
                                                                                            method="PUT"
                                                                                            enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <a href="{{ route('employee.reject', $pending->id) }}"
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
                                                    <div class="tab-pane fade show active" id="nav-applications"
                                                        role="tabpanel" aria-labelledby="nav-applications-tab">
                                                        <div class="col-md-12">
                                                            <div class="mb-md-0">
                                                                <div class="card-body">
                                                                    <p class="breadcrumb alert alert-dark text-small">
                                                                        Students
                                                                        ordered by AVG</p>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-light table-striped">
                                                                            <tr>
                                                                                <th colspan="1" class="text-center">
                                                                                    #
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Name
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    English
                                                                                    Grade</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Total
                                                                                    Grades</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Average
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    firstDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    secondDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    thirdDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Status
                                                                                </th>
                                                                                <th colspan="3" class="text-center">
                                                                                    Action
                                                                                </th>
                                                                            </tr>
                                                                            @foreach ($users22 as $data)
                                                                                <tr class="align-item-center">
                                                                                    <th class="text-center">
                                                                                        {{ $data->id }}</th>
                                                                                    <th class="text-center">
                                                                                        {{ $data->name }}</th>
                                                                                    <th class="text-center">
                                                                                        {{ $data->englishDegree }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $data->highSchoolTotalMarks }}
                                                                                    </th>
                                                                                    <th class="text-center text-orange">
                                                                                        {{ round(((($data->englishDegree / 60) * 100 + ($data->highSchoolTotalMarks / 300) * 100) / 200) * 100, 1) }}
                                                                                        %
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $data->firstDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $data->secondDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $data->thirdDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $data->status }}</th>
                                                                                    <th colspan="2"
                                                                                        class="d-flex justify-content-between m-1 p-1 w-20 text-center">
                                                                                        <form
                                                                                            action="{{ route('employee.approve', $data->id) }}"
                                                                                            method="PUT"
                                                                                            enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <a href="{{ route('employee.approve', $data->id) }}"
                                                                                                class="text-light btn bg-success"><i
                                                                                                    class="fa-solid fa-check"></i></a>
                                                                                        </form>
                                                                                        <form
                                                                                            action="{{ route('employee.reject', $data->id) }}"
                                                                                            method="PUT"
                                                                                            enctype="multipart/form-data">
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
                                                    <div class="tab-pane fade" id="nav-approved" role="tabpanel"
                                                        aria-labelledby="nav-approved-tab">
                                                        <div class="col-md-12">
                                                            <div class="mb-md-0">
                                                                <div class="card-body">
                                                                    <p class="breadcrumb alert alert-dark text-small">
                                                                        Approved
                                                                        Students</p>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-light table-striped">
                                                                            <tr>
                                                                                <th colspan="1" class="text-center">
                                                                                    #
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Name
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    English
                                                                                    Grade</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Total
                                                                                    Grades</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Average
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    firstDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    secondDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    thirdDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Status
                                                                                </th>
                                                                                <th colspan="3" class="text-center">
                                                                                    Action
                                                                                </th>
                                                                            </tr>
                                                                            @foreach ($users24 as $approved)
                                                                                <tr class="align-item-center">
                                                                                    <th class="text-center">
                                                                                        {{ $approved->id }}</th>
                                                                                    <th class="text-center">
                                                                                        {{ $approved->name }}</th>
                                                                                    <th class="text-center">
                                                                                        {{ $approved->englishDegree }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $approved->highSchoolTotalMarks }}
                                                                                    </th>
                                                                                    <th class="text-center text-orange">
                                                                                        {{ round(((($approved->englishDegree / 60) * 100 + ($approved->highSchoolTotalMarks / 300) * 100) / 200) * 100, 1) }}
                                                                                        %
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $approved->firstDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $approved->secondDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $approved->thirdDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $approved->status }}</th>
                                                                                    <th colspan="2"
                                                                                        class="d-flex justify-content-between m-1 p-1 w-20 text-center">
                                                                                        <form
                                                                                            action="{{ route('employee.approve', $approved->id) }}"
                                                                                            method="PUT"
                                                                                            enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <a href="{{ route('employee.approve', $approved->id) }}"
                                                                                                class="text-light btn bg-success"><i
                                                                                                    class="fa-solid fa-check"></i></a>
                                                                                        </form>
                                                                                        <form
                                                                                            action="{{ route('employee.reject', $approved->id) }}"
                                                                                            method="PUT"
                                                                                            enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <a href="{{ route('employee.reject', $approved->id) }}"
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
                                                    <div class="tab-pane fade" id="nav-rejected" role="tabpanel"
                                                        aria-labelledby="nav-rejected-tab">
                                                        <div class="col-md-12">
                                                            <div class="mb-md-0">
                                                                <div class="card-body">
                                                                    <p class="breadcrumb alert alert-dark text-small">
                                                                        Rejected
                                                                        Students</p>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-light table-striped">
                                                                            <tr>
                                                                                <th colspan="1" class="text-center">
                                                                                    #
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Name
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    English
                                                                                    Grade</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Total
                                                                                    Grades</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Average
                                                                                </th>
                                                                                <th colspan="1" class="text-center">
                                                                                    firstDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    secondDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    thirdDesire</th>
                                                                                <th colspan="1" class="text-center">
                                                                                    Status
                                                                                </th>
                                                                                <th colspan="3" class="text-center">
                                                                                    Action
                                                                                </th>
                                                                            </tr>
                                                                            @foreach ($users25 as $rejected)
                                                                                <tr class="align-item-center">
                                                                                    <th class="text-center">
                                                                                        {{ $rejected->id }}</th>
                                                                                    <th class="text-center">
                                                                                        {{ $rejected->name }}</th>
                                                                                    <th class="text-center">
                                                                                        {{ $rejected->englishDegree }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $rejected->highSchoolTotalMarks }}
                                                                                    </th>
                                                                                    <th class="text-center text-orange">
                                                                                        {{ round(((($rejected->englishDegree / 60) * 100 + ($rejected->highSchoolTotalMarks / 300) * 100) / 200) * 100, 1) }}
                                                                                        %
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $rejected->firstDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $rejected->secondDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $rejected->thirdDesire }}
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        {{ $rejected->status }}</th>
                                                                                    <th colspan="2"
                                                                                        class="d-flex justify-content-between m-1 p-1 w-20 text-center">
                                                                                        <form
                                                                                            action="{{ route('employee.approve', $rejected->id) }}"
                                                                                            method="PUT"
                                                                                            enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <a href="{{ route('employee.approve', $rejected->id) }}"
                                                                                                class="text-light btn bg-success"><i
                                                                                                    class="fa-solid fa-check"></i></a>
                                                                                        </form>
                                                                                        <form
                                                                                            action="{{ route('employee.reject', $rejected->id) }}"
                                                                                            method="PUT"
                                                                                            enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <a href="{{ route('employee.reject', $rejected->id) }}"
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $.fn.editable.defaults.mode = 'inline';

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });

                $('.update').editable({
                    url: "{{ route('admin.update') }}",
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

                    type: 'password',
                    pk: 1,
                    name: 'password',
                    title: 'Enter password',

                });
                $('.updateEmployee').editable({

                    url: "{{ route('admin.empUpdate') }}",
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

                    type: 'password',
                    pk: 1,
                    name: 'password',
                    title: 'Enter password',
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

                    type: 'text',
                    pk: 1,
                    name: 'address',
                    title: 'Enter address',

                    type: 'number',
                    pk: 1,
                    name: 'englishDegree',
                    title: 'Enter englishDegree',

                    type: 'number',
                    pk: 1,
                    name: 'highSchoolTotalMarks',
                    title: 'Enter highSchoolTotalMarks',

                    type: 'password',
                    pk: 1,
                    name: 'password',
                    title: 'Enter password',
                });
            </script>
            <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
            </script>
        </body>
    </section>
@endsection
