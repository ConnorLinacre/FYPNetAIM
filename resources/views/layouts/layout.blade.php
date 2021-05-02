<html>
<head>
    <title>@yield('title')</title>

    <!-- JQuery created by the jQuery foundation. Available from https://jquery.com/ -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Bootstrap 4 created by the Bootstrap team. Available from https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- DataTables designed and created by SpryMedia Ltd. Available from https://datatables.net/ (Edited for style) -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.css') }}">
    <script type="text/javascript" charset="utf8" src="{{ asset('scripts/datatables.js') }}"></script>


    <!-- IonIcons developed by the Ionic Framework Team. Available from https://ionicons.com/ -->
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        @yield('style')
    </style>
</head>
@include('parts.header')
<body style="background: #248f59">
<p></p>
<script>
    @yield('scripts')
</script>
<!-- The container is a bordered box, with 2% margin. The border is then defined in an internal div, with a 1% top border, and a 50px side border -->
<div id="container" style="padding-left: 2%; padding-right: 2%">
    <div id="content" class="text-dark" style="padding: 1% 50px; border: 4px solid #137e48; border-radius: 20px; background-color: #2eb872">
        @yield('content')
    </div>
</div>
</body>
</html>
