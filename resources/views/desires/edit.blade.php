@extends('layouts.app')
@section('content')
    <section style="background-color: #eee;">
        <div class="row">
            <div class="col-md-6 py-5 mx-auto">
                <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <p class="text-center text-small">Desires Application Form</p>
                        <form action="{{ route('desires.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="exampleFormControlSelect1">First Desire</label>
                                <select name="selectBox1" class="form-control" id="selectBox1" required>
                                    <option value="{{ $desires->firstDesire }}"></option>
                                    <option value="{{ $desires->secondDesire }}"></option>
                                    <option value="{{ $desires->thirdDesire }}"></option>
                                </select>
                                <label for="exampleFormControlSelect1">Second Desire</label>
                                <select name="selectBox2" class="form-control" id="selectBox2" required>
                                    <option value="{{ $desires->firstDesire }}"></option>
                                    <option value="{{ $desires->secondDesire }}"></option>
                                    <option value="{{ $desires->thirdDesire }}"></option>
                                </select>
                                <label for="exampleFormControlSelect1">Third Desire</label>
                                <select name="selectBox3" class="form-control" id="selectBox3" required>
                                    <option value="{{ $desires->firstDesire }}"></option>
                                    <option value="{{ $desires->secondDesire }}"></option>
                                    <option value="{{ $desires->thirdDesire }}"></option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-apply btn-block" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
