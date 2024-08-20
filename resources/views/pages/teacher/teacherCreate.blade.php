@extends('layouts.app')

@section('content')

<h2>Create Teacher</h2>

<form action="{{ route('teacherCreate') }}" class="form-group" method="post">
    {{ csrf_field() }}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    

    <div class="col-md-4 form-group">
        <span>NAME</span>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror    
    </div>


    <div class="col-md-4 form-group">
        <span>EMAIL</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror    
    </div>

    <div class="col-md-4 form-group">
        <span>PHONE</span>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror    
    </div>

    <input type="submit" class="btn btn-primary" value="Add Student">
    

</form>
@endsection