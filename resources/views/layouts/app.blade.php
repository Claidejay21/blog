<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('inc.head')
</head>
<body>
        <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    @include('inc.navbar')
    @section('main-content')
    @show
    @include('inc.footer')
</body>
</html>
