<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('admin.head')
</head>
<body>
    @include('admin.navbar')
    @include('admin.app-header')
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    @section('main-content')
    @show
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script><
</body>
</html>
