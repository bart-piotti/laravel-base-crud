@extends('layout.app')
@section('page_title', 'Students List')
@section('content')
    <h1 style="text-align: center; padding: 20px 0;">Students List</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary" style="position: absolute;right: 150px;top: 30px;">Register a new student</a>
    <table style="width:85%; margin: auto; text-align: center;">
      <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Registration Number</th>
      </tr>
      @foreach ($data as $student)
      <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->lastname}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->registration_number}}</td>
        <td>
            <a href="{{ route('students.show', ['student' => $student->id ]) }}" class="btn btn-info">Show details</a>
            <a href="{{ route('students.edit', ['student' => $student->id ]) }}" class="btn btn-warning" style="color:white;">Edit</a>
            <a href="#" class="btn btn-danger delete_btn">
                <i class="fas fa-trash-alt"></i>
            </a>
            <div class="form_container">
                <h3>Attention!</h3>
                <p>This will permanently <strong>DELETE</strong> {{$student->name . ' ' . $student->lastname}}'s data. Are you sure?</p>
                <div class="yes_no">
                    <form id="delete_form" action="{{ route('students.destroy', ['student' => $student->id]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" name="button" class="btn btn-danger">Delete</button>
                    </form>
                    <button type="button" name="button" class="btn btn-info go_back_btn">Go back</button>
                </div>
            </div>
        </td>
      </tr>
      @endforeach
    </table>
@endsection
