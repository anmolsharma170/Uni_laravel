@extends('layout')
@section('content')
<h2>Student List</h2>
<ul>
    @foreach($students as $student)
        <li>
            {{$student->name}}
            {{$student->age}}
        </li>
        @endforeach
    
</ul>
@endsection