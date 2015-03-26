@extends('app')

@section('page-header')
    <div class="page-header full-content">
        <div class="row">
            <div class="col-sm-6">
                <h1>Dashboard:
                    <small>View All Messages</small>
                </h1>
            </div>
            <!--.col-->
        </div>
        <!--.row-->
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <table class="table table-hover" id="messages_table">
                <thead>
                <th>From</th>
                <th>Email</th>
                <th>Received on</th>
                <th>Quote</th>
                <th>Read</th>
                <th>Replied</th>
                <th>View</th>
                </thead>
                <tbody>
                @foreach($messages as $item)
                    <tr>
                        <td>
                            {{ @$item->name }}
                        </td>
                        <td>
                            {{ @$item->email }}
                        </td>
                        <td>
                            {{ Carbon::parse($item->created_at)->toFormattedDateString() }}
                        </td>
                        <td>
                            {{ @$item->quote }}
                        </td>
                        <td>
                            @if ($item->read == 1)
                                <i class="fa fa-check-circle fa-lg" style="color:#2ecc71"></i>

                            @else
                                <i class="fa fa-exclamation-circle fa-lg" style="color:#d35400"></i>

                            @endif
                        </td>
                        <td>
                            @if ($item->replied == 1)
                                <i class="fa fa-check-circle fa-lg" style="color:#2ecc71"></i>

                            @else
                                <i class="fa fa-exclamation-circle fa-lg" style="color:#d35400"></i>

                            @endif
                        </td>
                        <td>
                            <button class="btn btn-xs btn-primary">view</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('footer-js')
    <!-- BEGIN PLUGINS AREA -->
    <script src="/backend/assets/globals/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/backend/assets/globals/plugins/datatables/themes/bootstrap/dataTables.bootstrap.js"></script>
    <!-- END PLUGINS AREA -->
    <script>
        $(document).ready(function () {
            $('#messages_table').DataTable();
        });
    </script>
@endsection
