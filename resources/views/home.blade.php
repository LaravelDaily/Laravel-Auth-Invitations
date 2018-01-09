@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>Hi, {{ Auth::user()->name }}!</p>

                    @if (Auth::user()->isAdmin())
                        <p><a class="btn btn-primary" href="{{ route('showInvitations') }}">Goto Invitation Requests</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
