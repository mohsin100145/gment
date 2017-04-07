@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                @can('super_admin-access')
                <h2>Super Admin</h2>
                @endcan

                @can('admin-access')
                <h2>Admin</h2>
                @endcan

                @can('normal_user-access')
                <h2>Normal User</h2>
                @endcan

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
