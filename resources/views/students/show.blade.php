@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
<h1 class="h3 mb-3">Student Details</h1>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $student->student_name }}</h5>

    <p class="mb-1"><strong>Age:</strong> {{ $student->age }}</p>
    <p class="mb-1"><strong>Phone:</strong> {{ $student->phone }}</p>
    <p class="text-muted"><small>Created: {{ $student->created_at->format('Y-m-d H:i') }}</small></p>

    <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
  </div>
</div>
@endsection