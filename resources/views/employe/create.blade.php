@extends('layouts.backend')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Employe</h1>
</div>
<form class="user" action="{{route('employe.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control form-control-user {{ $errors->has('name') ? ' is-invalid' : '' }}" id="exampleFirstName" placeholder="Name" value="{{ old('name') }}">
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong style="color:red">{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" name="email" class="form-control form-control-user {{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail" placeholder="Email Address" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong style="color:red">{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="company">Company</label>
        <select class="form-control {{ $errors->has('company') ? ' is-invalid' : '' }}" name="company">
            <option value="">-- Select Company --</option>
            @foreach ($companies as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        @if ($errors->has('company'))
            <span class="invalid-feedback" role="alert">
                <strong style="color:red">{{ $errors->first('company') }}</strong>
            </span>
        @endif
    </div>
    <hr>
    <button type="submit" class="btn btn-primary btn-user btn-block">Save</button>
</form>
@endsection