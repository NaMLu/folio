@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Messages</h1>
            </div>
        </div>
        <div class="row">
            <table class="table table-hover">
                <tr>
                    <th>From</th>
                    <th>Email</th>
                    <th>Received on</th>
                    <th>Quote</th>
                    <th>Read</th>
                    <th>Replied</th>
                    <th>View</th>
                </tr>
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
            </table>
        </div>
    </div>
@endsection

@section('footer-js')
    <script>

    </script>
@endsection
