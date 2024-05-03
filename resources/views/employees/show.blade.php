@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Employee Details
        </div>
        <div class="card-body">
            <h5 class="card-title mb-3"><strong>Name:</strong> {{ $employees->name }}</h5>
            <p class="card-text mb-1"><strong>Adresse:</strong> {{ $employees->adresse }}</p>
            <p class="card-text mb-1"><strong>Mobile:</strong> {{ $employees->mobile }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $employees->email }}</p>
            <a href="{{ url('/employee') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
