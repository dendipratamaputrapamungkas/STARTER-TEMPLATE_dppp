@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="containet">
        <div class="row justify-content-center">
            <div class="col_md-12">
                <div class="card">
                    <div class="card-header">{(__('Dashboard'))}</div>
                    <div class="card-body">
                        @if($user->roles_id ==1)
                            anda login sebagai admin
                        @else
                            anda login sebagai user
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
