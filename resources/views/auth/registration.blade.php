@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
          <div class="card " style="margin: 20px;">
                <div class="card-header">Registration Page </div>
                <div class="card-body">
            <form method="post" action="{{route('registration.post')}}">
                 @csrf
            <div class="form-group row">
                    <label class="col-md-4">Name</label>
                    <div class="col-md-8">
                        <input type=" text" name="name" class="form-control" placeholder="Enter Your Name" >
                   </div>
                 </div>
                 @if ($errors ->has('name'))
                 <span class="text-danger">{{$errors->first('name')}}</span>    
                 @endif
                 <div class="form-group row">
                    <label class="col-md-4">E-mail</label>
                    <div class="col-md-8">
                        <input type=" text" name="email" class="form-control" placeholder="Enter Your e-mail" >
                    </div>
                 </div>
                 @if ($errors ->has('email'))
                 <span class="text-danger">{{$errors->first('email')}}</span>    
                 @endif
                 <div class="form-group row">
                    <label class="col-md-4">Password</label>
                    <div class="col-md-8">
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" >
                    </div>
                 </div>
                 @if ($errors ->has('password'))
                 <span class="text-danger">{{$errors->first('password')}}</span>    
                 @endif
                 <div class="form-group row">
                    <label class="col-md-4">Confirm Password</label>
                    <div class="col-md-8">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Your Password" >
                    </div>
                 </div>
                 <div class="form-group row">
                    <div class="col-md-8">
                        <input type="submit" value="Submit"  class="btn btn-success"><br/>
                    </div>
                 </div>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>
@endsection