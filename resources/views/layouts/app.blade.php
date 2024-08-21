<!DOCTYPE html>
<html class="no-js" lang="ru" style="display: none;>

@include('layouts.head')

<body class=" preloader-init">

<div class="wrapper">
    @include('layouts.header')
    @include('layouts.mobile-menu')

    <main class="content">
        @yield('content')
    </main>

    @include('layouts.footer')
    @include('layouts.modals')
</div>

@include('layouts.scripts')
</body>

</html>