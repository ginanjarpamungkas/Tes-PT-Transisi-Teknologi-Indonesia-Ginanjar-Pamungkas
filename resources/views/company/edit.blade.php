@extends('layouts.backend')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Company</h1>
</div>
<form class="user" action="{{route('company.update',$company->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control form-control-user {{ $errors->has('name') ? ' is-invalid' : '' }}" id="exampleFirstName" placeholder="Company Name" value="{{$company->name}}">
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong style="color:red">{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="Email"></label>
        <input type="email" name="email" class="form-control form-control-user {{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail" placeholder="Email Address" value="{{$company->email}}">
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong style="color:red">{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="website">Website</label>
        <input type="url" name="website" class="form-control form-control-user {{ $errors->has('website') ? ' is-invalid' : '' }}" id="exampleInputEmail" placeholder="Company Website" value="{{$company->website}}">
        @if ($errors->has('website'))
            <span class="invalid-feedback" role="alert">
                <strong style="color:red">{{ $errors->first('website') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="logo">logo</label>
        <input type="file" name="logo" class="form-control form-control-user {{ $errors->has('logo') ? ' is-invalid' : '' }}" id="exampleInputEmail" placeholder="Logo" value="{{$company->logo}}">
        @if ($errors->has('logo'))
            <span class="invalid-feedback" role="alert">
                <strong style="color:red">{{ $errors->first('logo') }}</strong>
            </span>
        @endif
    </div>
    <hr>
    <button type="submit" class="btn btn-primary btn-user btn-block">Save</button>
</form>
@endsection