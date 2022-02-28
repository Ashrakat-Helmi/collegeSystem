@section('content')
    <div class="container col-md-4">

        <h1 class="bgen text-center text-primary"> List All Programs </h1>

        <div class="card">
            <input id="search" type="text" class="form-control" placeholder="Search..">
            <div class="card-body">
                <table id="searchTable" class="table ">
                    <tr>
                        <th>ID</th>
                        <th> Program </th>
                    </tr>
                    @foreach ($programs as $item)
                        <tr>
                            <td> {{ $item->program_id }} </td>
                            <td>{{ $item->program }}</td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
