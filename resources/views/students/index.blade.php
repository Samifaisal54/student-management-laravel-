@extends('layouts.app')

@section('title', 'All Students')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="h3">All Students</h1>
  <a href="{{ route('students.create') }}" class="btn btn-success">+ Add Student</a>
</div>

@if($students->isEmpty())
  <div class="alert alert-info">No students yet. Add one.</div>
@else
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Created</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><a href="{{ route('students.show', $student) }}">{{ $student->student_name }}</a></td>
          <td>{{ $student->age }}</td>
          <td>{{ $student->phone }}</td>
          <td>{{ $student->created_at->format('Y-m-d') }}</td>
          <td style="min-width:170px;">
            <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-primary">Edit</a>

            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this student?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {{-- simple pagination if controller provides it --}}
  @if(method_exists($students, 'links'))
    <div class="mt-3">{{ $students->links() }}</div>
  @endif
@endif
@endsection