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
                    <div class="card">
                        <div class="card-header">Employee's register</div>
                        <div class="card-body">
                            <form action="{{ route('employee.create') }}" method="post" autocomplete="off">
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
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                        placeholder="Enter Your Name">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                        placeholder="Enter Your Email Address">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select id="gender" class="form-control" name="gender" value="{{ old('gender') }}">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('gender')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="tel" pattern="^01[0-2]\d{1,8}$" name="phone" class="form-control"
                                        value="{{ old('phone') }}" placeholder="Enter Your phone">
                                    <span class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="empId">Employee ID</label>
                                    <input type="number" name="empId" class="form-control" value="{{ old('empId') }}"
                                        placeholder="Enter Your Employee ID">
                                    <span class="text-danger">
                                        @error('empId')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        value="{{ old('password') }}" placeholder="Enter Your password">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                                <div class="form-group">
                                    <label for="cpassword">Confirm Password</label>
                                    <input type="password" name="cpassword" class="form-control"
                                        value="{{ old('cpassword') }}" placeholder="Enter Your Confirmation password">
                                    <span class="text-danger">
                                        @error('cpassword')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
        </script>
        </body>
    </section>
@endsection
