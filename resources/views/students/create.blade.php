@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
<h1 class="h3 mb-3">Add Student</h1>

@if($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $err)
        <li>{{ $err }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('students.store') }}" method="POST">
  @csrf

  <div class="mb-3">
    <label class="form-label">Student Name</label>
    <input type="text" name="student_name" value="{{ old('student_name') }}" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Age</label>
    <input type="number" name="age" value="{{ old('age') }}" class="form-control" required min="0">
  </div>

  <div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" required>
  </div>

  <button class="btn btn-primary">Save</button>
  <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection