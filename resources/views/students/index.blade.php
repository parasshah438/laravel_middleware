@extends('layouts.app')
@section('content')
<div class="container">
        <div class="flex-center position-ref full-height">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
               
            @foreach($data as $students)
             <tr>
                <td>{{ $students->id }}</td>
                <td>{{ $students->name }}</td>
                <td>{{ $students->email }}</td>
            </tr>
            @endforeach
            
        </div>
</div>
@endsection