@extends('layout')
@section('content')
<form method="POST" action="{{ route('employee.update',$employee->id) }}">
    @csrf
    @method('PUT')
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputName4">Name</label>
        <input type="text" class="form-control" value="{{$employee->name}}" name="name" id="inputName4" placeholder="Name" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputDepartment4">Department</label>
        <input type="text" class="form-control" maxlength="4" id="inputDepartment4" value="{{$employee->dept}}" name="dept" placeholder="Department" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputSalary">Salary</label>
      <input type="text" class="form-control" maxlength="6" min="0" max="300000" id="inputSalary" value="{{$employee->salary}}" name="salary" placeholder="0.00" required>
    </div>
    <div class="form-group">
        <label for="inputPhone">Phone</label>
        <input type="text" width="10" maxlength="10" minlength="10" class="form-control" value="{{$employee->phone}}" name="phone" id="inputPhone" placeholder="Contact" required>
      </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Update Employee</button>
    </div>
  </form>
@endsection
