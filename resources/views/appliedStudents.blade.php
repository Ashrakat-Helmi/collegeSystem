@include('layouts.structure.header')
@include('layouts.structure.navbar')
@yield('content')


<div class="container pt-3">
    <div class="row justify-content-center pt-3">
        <div class="col-md-4">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center" scope="col-1">Program</th>
                        <th class="text-center" scope="col-1">Counter</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="text-center">BIS</td>
                            <td class="text-center">{{ $BISCOUNTER }}</td>
                        </tr>

                </tbody>
            </table>
        </div>

        <div class="col-md-4">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center" scope="col-1">Program</th>
                        <th class="text-center" scope="col-1">Counter</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="text-center">FMI</td>
                            <td class="text-center">{{ $FMICOUNTER }}</td>
                        </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-4">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center" scope="col-1">Program</th>
                        <th class="text-center" scope="col-1">Counter</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="text-center">ES</td>
                            <td class="text-center">{{ $ESCOUNTER }}</td>
                        </tr>

                        </tbody>
            </table>
        </div>


    </div>
</div>

<div class="container pt-2">
    <div class="row justify-content-center pt-2">
        <div class="col-md-4">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center" scope="col-1">Name</th>
                        <th class="text-center" scope="col-1">Program</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($BISNAME as $name)
                        <tr>
                            <th class="text-center" scope="row">{{ $name->studentName }}</th>
                            <td class="text-center">BIS</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="col-md-4">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center" scope="col-1">Name</th>
                        <th class="text-center" scope="col-1">Program</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($FMINAME as $name2)
                        <tr>
                            <th class="text-center" scope="row">{{ $name2->studentName }}</th>
                            <td class="text-center">FMI</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="col-md-4">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center" scope="col-1">Name</th>
                        <th class="text-center" scope="col-1">Program</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ESNAME as $name3)
                        <tr>
                            <th class="text-center" scope="row">{{ $name3->studentName }}</th>
                            <td class="text-center">ES</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </div>
</div>

@include('layouts.structure.footer')
