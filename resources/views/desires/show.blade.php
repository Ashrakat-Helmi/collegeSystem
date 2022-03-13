@extends('layouts.app')
@section('content')
    <section style="background-color: #eee;">

        <h1 class="text-center text-dark">Desires ID : {{ $desires->id }}</h1>
        <div class="container col-md-6">
            <div class="card bg-dark text-white">
                <div class="card-body bg-dark text-white">
                    <div class="card-body">
                        <h2 class="card-title text-light text-center">firstDesire : {{ $desires->firstDesire }}</h2>
                        <p class="card-text text-center text-muted">secondDesire : {{ $desires->secondDesire }}</p>
                        <p class="card-text text-center text-muted">thirdDesire : {{ $desires->thirdDesire }}</p>
                        <div class="container d-flex justify-content-around">
                            <a href="{{ route('desiress.edit', $desires->id) }}" class="w-25 btn btn-success"><i
                                    class="text-light fa-solid fa-pen-to-square"></i> | Edit</a>
                            <a href="{{ route('desiress.destroy', $desires->id) }}" class="w-25 btn btn-danger"><i
                                    class="text-light fa-solid fa-trash"></i> | Delete</a>
                            <a href="{{ route('desiress.index') }}" class="w-25 btn btn-light"><i
                                    class="text-dark fas fa-next"></i> | Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
