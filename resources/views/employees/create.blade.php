@extends('layouts.app')

@section('content')
<h1>Add Employee</h1>
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="employee_code">Employee Code:</label>
    <input type="text" name="employee_code" id="employee_code" required>
    <br>
    <button type="submit">Save</button>
</form>
@endsection
