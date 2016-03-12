@extends('layouts.app')
@section('content')
    <h1 class="text-center">Add New Employee</h1>
    @include('common.errors')
    <form class="form-horizontal" action="/employees" method="POST">
    	{{ csrf_field() }}
    	<div class="form-group">
	    	<label for="employee_emp_id" class="col-sm-2 control-label">Employee Id</label>
	    	<div class="col-sm-4">
	    		<input type="number" name="emp_num" class="form-control" id="employee_emp_num" placeholder="Employee ID">
	    	</div>	
	    </div>
        <div class="form-group">
            <label for="employee_firstname" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-4">
                <input type="text" name="firstname" class="form-control" id="employee_firstname" placeholder="First Name">
            </div>  
        </div>
        <div class="form-group">
            <label for="employee_lastname" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-4">
                <input type="text" name="lastname" class="form-control" id="employee_lastname" placeholder="Last Name">
            </div>  
        </div>
        <div class="form-group">
            <label for="employee_dept" class="col-sm-2 control-label">Department</label>
            <div class="col-sm-4">
                <input type="text" name="dept" class="form-control" id="employee_dept" placeholder="Department">
            </div>  
        </div>
        <div class="form-group">
            <label for="employee_title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-4">
                <input type="text" name="title" class="form-control" id="employee_title" placeholder="Title">
            </div>  
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Add Employee</button>
            </div>
        </div>
    </form>	
@endsection