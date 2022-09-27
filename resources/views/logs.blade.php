@extends('base')

@section('title', 'Logs')

@extends('navbar')

@section('content')
    <div class="container">
        <div class="d-grid gap-2 d-md-flex">
            <h1>Activity Log</h1>
        </div>
        <table class="table table-bordered table-striped table-sm table-hover">
            <thead style="background-color: rgba(127, 169, 199, 0.527)">
                <th>Timestamp</th>
                <th>Log Entry</th>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->created_at }}</td>
                    <td>{{ $log->log_entry }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
