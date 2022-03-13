@include('layouts.structure.header')
@if (Auth::guard('employee')->check())
    @include('layouts.structure.empnavbar')
@elseif (Auth::guard('admin')->check())
    @include('layouts.structure.adminnavbar')
@elseif (Auth::guard('web')->check())
    @include('layouts.structure.usernavbar')
@else
    @include('layouts.structure.navbar')
@endif

@yield('content')
@include('layouts.structure.footer')
