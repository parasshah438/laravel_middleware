@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard {{Auth()->user()->isAdmin == 1 ? 'Admin' : 'User'  }}</div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <a href="/students" class="btn btn-link" style="text-align:left">View Student</a>
            </div>
        </div>
    </div>
</div>
@endsection
