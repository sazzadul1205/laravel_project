<!DOCTYPE html>
<html lang="en">

{{-- Head --}}
@yield('head')

{{-- Auth Guard --}}


<body class="skin-blue sidebar-mini">

    <div class="wrapper boxed-wrapper">

        {{-- Nav --}}
@if (Auth::guard('admin')->check())
@include('admin.layout.nav')
@else
@include('backend.layout.nav')
@endif




        {{-- Sidebar --}}
        @include('admin.layout.sidebar')

        {{-- Content --}}
        @yield('content')

        {{-- footer --}}
        @include('admin.layout.footer')

        {{-- Control Sidebar --}}
        @include('admin.layout.controlSidebar')
    </div>

    {{-- Scripts --}}
    @yield('scripts')

</body>
