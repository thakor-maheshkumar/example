@extends('main.app')
@section('content')
<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                   
                    <div class="col-lg-6">
                        <div class="p-5">            
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add Employee</h1>
                            </div>
                            <form class="user" method="post" action="{{url('employee/save')}}">
                             	@csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" 
                                    id="name" name="name" placeholder="Name">
                                    
                                </div>
                                	@error('name')
									    <div class="alert alert-danger">{{ $message }}</div>
									@enderror
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email"placeholder="Email Address" name="email">
                                    @error('email')
									    <div class="alert alert-danger">{{ $message }}</div>
									@enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="mobile" name="mobile" placeholder="Mobile">
                                    @error('mobile')
									    <div class="alert alert-danger">{{ $message }}</div>
									@enderror
                                </div>
                               
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Employee
                                </button>
                                
                            </form>
                            <hr>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection