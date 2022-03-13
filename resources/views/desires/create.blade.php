@extends('layouts.app')
@section('content')
    <section style="background-color: #eee;">
        <div class="row">
            <div class="col-md-6 py-5 mx-auto">
                <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <p class="text-center text-small">Desires Application Form</p>
                        <form class="from-prevent-multiple-submits" action="{{ route('desires.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @if (session()->has('error'))
                                <div class="alert alert-success">
                                    {{ session()->get('error') }}
                                </div>
                            @endif

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
                            <div class="form-group mb-4">
                                <label for="seeAnotherField">First Desire</label>
                                <select id="seeAnotherField" class="form-control" name="firstDesire"
                                    value="{{ old('firstDesire') }}" required
                                    data-validation-required-message="This field is required">
                                    <option value="0" disabled>1st Desire</option>
                                    @foreach ($Programs as $ProgramsField)
                                        <option value="{{ $ProgramsField->name }}">{{ $ProgramsField->name }}</option>
                                    @endforeach
                                </select>
                                <label for="exampleFormControlSelect1">second Desire</label>
                                <select id="secondDesire" class="form-control" name="secondDesire"
                                    value="{{ old('secondDesire') }}" required
                                    data-validation-required-message="This field is required">

                                    @foreach ($Programs as $ProgramsField)
                                        <option value="{{ $ProgramsField->name }}">{{ $ProgramsField->name }}</option>
                                    @endforeach
                                </select>
                                <label for="exampleFormControlSelect1">third Desire</label>
                                <select id="thirdDesire" class="form-control" name="thirdDesire"
                                    value="{{ old('thirdDesire') }}" required
                                    data-validation-required-message="This field is required">

                                    @foreach ($Programs as $ProgramsField)
                                        <option value="{{ $ProgramsField->name }}">{{ $ProgramsField->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-apply btn-block from-prevent-multiple-submits">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                (function() {
                    $('.from-prevent-multiple-submits').on('submit', function() {
                        $('.from-prevent-multiple-submits').attr('disabled', 'true');
                    })
                })();
            </script>
        </div>
    </section>
@endsection
