<!DOCTYPE html>
<html lang="en">

{{-- Head --}}
@yield('head')


<body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">

        {{-- Nav --}}
        @include('backend.layout.nav')

        {{-- Sidebar --}}
        @include('backend.layout.sidebar')

        {{-- Content --}}
        @yield('content')

        {{-- footer --}}
        @include('backend.layout.footer')

        {{-- Control Sidebar --}}
        @include('backend.layout.controlSidebar')
    </div>

    {{-- Scripts --}}
    @yield('scripts')

</body>
