@extends('layouts.layout')
@section('content')
    <div class="card " style="margin: 20px;">
        <div class="card-header">Create new employee </div>
        <div class="card-body">
            <form action="{{url('employee')}}" method="POST">
                {!! csrf_field()!!}
                <label >Name</label><br/>
                <input type="text" name="name" id="name" class="form-control"><br/>
                <label >Adresse</label><br/>
                <input type="text" name="adresse" id="adresse" class="form-control"><br/>
                <label >Mobile</label><br/>
                <input type="text" name="mobile" id="mobile" class="form-control"><br/>
                <label >email</label><br/>
                <input type="text" name="email" id="email" class="form-control"><br/>
                <input type="submit" value="save"  class="btn btn-success"><br/>

            </form>
        </div>
      

    </div>
@endsection