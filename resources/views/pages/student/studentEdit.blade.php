@extends('layouts.app')

@section('content')

<h2>Create Student</h2>

<form action="{{ route('studentEdit') }}" class="form-group" method="post">
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
        <span>ID</span>
        <input type="text" name="id" value="{{$student->id}}" class="form-control" readonly>
        @error('id')
            <span class="text-danger">{{ $message }}</span>
        @enderror    
    </div>

    <div class="col-md-4 form-group">
        <span>NAME</span>
        <input type="text" name="name" value="{{$student->name}}" class="form-control">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror    
    </div>

    <div class="col-md-4 form-group">
        <span>Student ID</span>
        <input type="text" name="student_id" value="{{$student->student_id}}" class="form-control">
        @error('id')
            <span class="text-danger">{{ $message }}</span>
        @enderror    
    </div>


    <!-- <div class="col-md-4 form-group">
        <span>DOB</span>
        <input type="text" name="dob" value="{{$student->dob}}" class="form-control">
        @error('dob')
            <span class="text-danger">{{ $message }}</span>
        @enderror    
    </div> -->

    <div class="col-md-4 form-group">
        <span>EMAIL</span>
        <input type="text" name="email" value="{{$student->email}}" class="form-control">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror    
    </div>

    <!-- <div class="col-md-4 form-group">
        <span>PHONE</span>
        <input type="text" name="phone" value="{{$student->phone}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror    
    </div> -->

    <input type="submit" class="btn btn-primary" value="Add Student">
    

</form>
@endsection