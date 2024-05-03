@extends('layouts.layout')
@section('title', 'Employees Management')
@section('content')


<div class="container">
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2>Employees Management System</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('/employee/create')}}" class="btn btn-success mb-3" title="add new employee"><i class="fas fa-plus"></i>Add</a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Adress</th>
                                    <th>Mobile</th>
                                    <th>email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($results->isEmpty())
                                <p>No results found.</p>
                                @else
                                @foreach ($results as $result)
                                    
                                <tr>
                                    <td>{{$result->id}}</td>
                                    <td>{{$result->name}}</td>
                                    <td>{{$result->adresse}}</td>
                                    <td>{{$result->mobile}}</td>
                                    <td>{{$result->email}}</td>
                                    <td>
                                        <a href="{{url('/employee/'.$result->id)}}"  class="btn btn-info btn-sm" title="view employee"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
                                        <a href="{{url('/employee/'.$result->id .'/edit')}}" class="btn btn-primary btn-sm" title="edit employee"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                        <form method="POST" action="{{url('/employee/'.$result->id)}}" style="display:inline">
                                            {{method_field('DELETE')}}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete employee" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @endif

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection
