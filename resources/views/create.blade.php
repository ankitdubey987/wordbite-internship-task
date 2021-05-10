@extends('layout')
@section('content')
<form method="POST" action="{{ route('employee.store') }}">
    @csrf
    @method('POST')
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputName4">Name</label>
        <input type="text" class="form-control"  name="name" id="inputName4" placeholder="Name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputDepartment4">Department</label>
        <input type="text" class="form-control" maxlength="4" id="inputDepartment4"  name="dept" placeholder="Department">
      </div>
    </div>
    <div class="form-group">
      <label for="inputSalary">Salary</label>
      <input type="number" class="form-control" id="inputSalary"  name="salary" placeholder="0.00">
    </div>
    <div class="form-group">
        <label for="inputPhone">Phone</label>
        <input type="text" width="10" maxlength="10" class="form-control"   name="phone" id="inputPhone" placeholder="Contact">
      </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Add Employee</button>
    </div>
  </form>
@endsection
