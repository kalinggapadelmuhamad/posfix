@extends('layouts.dashboard')
@section('title', 'Dashboard - Point Of Sales')
@section('insert-css')
    <style>
        * {
            box-sizing: border-box;

        }

        ::placeholder {
            font-weight: 300;
        }
    </style>
@endsection
@section('content')
    {{-- @include('layouts.partials.dashboard._main') --}}
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.partials.dashboard._sidebar')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include('layouts.partials.dashboard._navbar')
                <!-- Topbar -->

                <!-- Container Fluid-->
                @yield('pages')
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            @include('layouts.partials.dashboard._footer')
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
@endsection
@section('insert-js')
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({

                dom: 'Bfrtip',
                buttons: [{
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    }, {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis'
                ],
                columnDefs: [{
                    targets: -1,
                    visible: false
                }]
            });
        });
    </script> --}}
@endsection
