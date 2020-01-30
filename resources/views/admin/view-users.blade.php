@extends('layouts.admin-master')

@section('title')
Admin Dashboard
@endsection

@section('content')
        <!-- All Product -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{ __('msg.Admin Dashboard') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active"><a href="#">{{ __('msg.Admin Dashboard') }}</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Customers List</strong>
                        </div>
                        <div class="card-body">
                            <div id="filtter" class="col-md-3">
                            </div>
                            <table id="user-table" class="table table-striped table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Client Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Code</th>
                                        <th>Service</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="srNo">{{ $i++ }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->contact }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->code }}</td>
                                        <td>{{ $user->service }}</td>
                                        <td>
                                            <div class="operationsblok">
                                                <a href="update-user/{{ $user->id }}" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="delete-user/{{ $user->id }}" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure to Delete User?');" >
                                                        <i class="fa  fa-trash-o"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot> <tr><th>Sr. No.</th>
                                    <th>Client Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Code</th>
                                    <th>Service</th>
                                    <th>Operations</th></tr></tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
        <!-- All Product -->

@endsection
@section('scripts')
<script>
    $custom_config =  {
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
        initComplete: function () {
            this.api().columns(7).every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value="">All Service</option></select>')
                    .appendTo( $("#filtter").empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
                column.data().unique().sort().each( function ( d, j ) {
                    if(d != '')
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    };
    $('#user-table').DataTable($custom_config);
</script>

@endsection
