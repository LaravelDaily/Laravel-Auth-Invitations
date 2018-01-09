@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header" style="margin-top: 0">
            <h1>Invitation Requests</h1>
        </div>
        <div class="panel panel-default" style="margin-top: 20px">
            <div class="panel-heading">Pending Requests <span class="badge">{{ count($invitations) }}</span></div>
            <div class="panel-body" style="padding: 0;">
                @if (!empty($invitations))
                    <table class="table table-responsive table-striped" style="margin-bottom: 0">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Invitation Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invitations as $invitation)
                                <tr>
                                    <td><a href="mailto:{{ $invitation->email }}">{{ $invitation->email }}</a></td>
                                    <td>{{ $invitation->created_at }}</td>
                                    <td>
                                        <kbd>{{ $invitation->getLink() }}</kbd>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No invitation requests!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
