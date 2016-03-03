@extends('layouts.app')
@section('content')
    <h1 class="text-center">Employees</h1>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Department</th>
            <th>Title</th>
            <th>Discipline History</th>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->emp_num }}</td>
                    <td>{{ $employee->lastname }}</td>
                    <td>{{ $employee->firstname }}</td>
                    <td>{{ $employee->dept }}</td>
                    <td>{{ $employee->title }}</td>
                    <td><a href="/disciplines/{{ $employee->id }}">View</a></td>
                </tr>
            @endforeach        
        </tbody>
    </table>        
@endsection