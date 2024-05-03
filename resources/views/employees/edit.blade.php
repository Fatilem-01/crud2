@extends('layouts.layout')
@section('content')
<div class="card" style="margin: 20px;">
    <div class="card-header">Edit Employee</div>
    <div class="card-body">
        <form action="{{ url('employee/'.$employees->id) }}" method="post">
            {!! csrf_field()!!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value ="{{$employees->id}}"><br/>
            <label >Name</label><br/>
            <input type="text" name="name" id="name" value ="{{$employees->name}}"class="form-control"><br/>
            <label >Adresse</label><br/>
            <input type="text" name="adresse" id="adresse" value ="{{$employees->adresse}}" class="form-control"><br/>
            <label >Mobile</label><br/>
            <input type="text" name="mobile" id="mobile" value ="{{$employees->mobile}}" class="form-control"><br/>
            <label >e-mail</label><br/>
            <input type="text" name="email" id="email" value ="{{$employees->email}}" class="form-control"><br/>
            <input type="submit" value="update"  class="btn btn-success"><br/>

        </form>
    </div>

</div>
    
@endsection