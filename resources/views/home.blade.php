@extends('layouts.app', ["current" => "dashboard", "user_name" => Auth::user()->name, "user_email" => Auth::user()->email ])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: 18rem;">
                <div class="card-header">Dashboard</div>
                {{ Auth::user()->name }}
                {{ Auth::user()->email }}
                <div class="card-body">
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
