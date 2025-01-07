@extends('layouts.app')

@section('content')
<h1>Employee List</h1>
<a href="{{ route('employees.create') }}">Add Employee</a>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Employee Code</th>
            <th>QR Code</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->employee_code }}</td>
            <td>
                <img src="{{ route('employees.qrCode', $employee->employee_code) }}" alt="QR Code">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
