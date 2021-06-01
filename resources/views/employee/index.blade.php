@extends('main.app')
@section('content')
<div class="container-fluid">

                    <!-- Page Heading -->
                    <a href="{{url('employee/add')}}" class="btn btn-primary">Add Employee</a>
                

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Employees</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($employee as $employees)
                                    	<tr>
                                    		<td>{{$employees->id}}</td>
                                    		<td>{{ucfirst($employees->name)}}</td>
                                    		<td>{{$employees->email}}</td>
                                    		<td>{{$employees->mobile}}</td>
                                    		<td>
                                    			<a class="btn btn-success" 
                                    			href='{{url("employee/edit/$employees->id")}}'>Edit</a>
                                    			<a href='{{url("employee/delete/$employees->id")}}' class="btn btn-danger">Delete</a>
                                    		</td>
                                    	</tr>
                             
                                    	@endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
@endsection
