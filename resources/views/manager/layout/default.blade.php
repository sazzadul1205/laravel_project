<!DOCTYPE html>
<html lang="en">

{{-- Head --}}
@yield('head')

{{-- Auth Guard --}}


<body class="skin-blue sidebar-mini">

    <div class="wrapper boxed-wrapper">

        {{-- Nav --}}

        @include('manager.layout.nav')



        {{-- Sidebar --}}
        @include('manager.layout.sidebar')

        {{-- Content --}}
        @yield('content')

        {{-- footer --}}
        @include('manager.layout.footer')

        {{-- Control Sidebar --}}
        @include('manager.layout.controlSidebar')
    </div>

    {{-- Scripts --}}
    @yield('scripts')

</body>
