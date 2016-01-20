@extends('layouts.default')
@section('title') Dashboard -@endsection
@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! {{Auth::user()->firstname}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
