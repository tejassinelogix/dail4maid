<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Xtacky Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="{{ URL::to('public/backend/images/icon.png') }}">

    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/scss/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/css/custom.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::to('public/backend/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
    @yield('styles')
</head>
<body>
    @include('partials.sidebar-admin')
    
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

    @include('partials.header-admin')

    @yield('content')
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ URL::to('public/backend/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{ URL::to('public/backend/assets/js/plugins.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/main.js') }}"></script>

    <!-- data table js -->
    <script src="{{ URL::to('public/backend/assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::to('public/backend/assets/js/lib/data-table/datatables-init.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });

    </script>

@yield('scripts')
</body>
</html>
