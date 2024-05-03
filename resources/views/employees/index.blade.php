@extends('layouts.layout')
@section('title', 'Employees Management')
@section('content')




<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h2>Employees Management System</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('/employees/create')}}" class="btn btn-success mb-3" title="Add new employee"><i class="fas fa-plus"></i> Add</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $count = ($employees->currentPage() - 1) * $employees->perPage() + 1;
                                @endphp
                                @foreach ($employees as $employee)
                                <tr>
                                    <td>{{$count++}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->adresse}}</td>
                                    <td>{{$employee->mobile}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>
                                        <a href="{{url('/employee/'.$employee->id)}}" class="btn btn-info btn-sm" title="View employee"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                        <a href="{{url('/employee/'.$employee->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit employee"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                        <form method="POST" action="{{url('/employee/'.$employee->id)}}" style="display:inline">
                                            {{method_field('DELETE')}}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete employee" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <nav class="text-center mt-3" >
        {{ $employees->links() }}
    </nav>
</div>
@endsection
