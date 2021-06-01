<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
    	$data['employee']=Employee::all();
    	return view('employee.index',$data);
    }
    public function create()
    {
    	return view('employee.create');
    }
    public function save(Request $request)
    {

    	$this->validate($request,[
    		'name'=>'required',
    		'email'=>'required',
    		'mobile'=>'required'
    	]);
    	$employee=new Employee;
    	$employee->name=strtoupper($request->name);
    	$employee->email=$request->email;
    	$employee->mobile=$request->mobile;
    	$employee->save();
    	return redirect('employee/list');
    }
    public function edit($id)
    {
    	$data['employee']=Employee::find($id);
    	return view('employee/edit',$data);
    }
    public function update(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required'
        ]);
    	$employee=Employee::find($request->id);
    	$employee->name=$request->name;
    	$employee->email=$request->email;
    	$employee->mobile=$request->mobile;
        if($employee->save()){
        return response()->json(["success"=>"Record inserted successfully"]);    
        }
        else{
            return response()->json(["failure"=>"Something wrong please try again"]);
        }
    	
    }
    public function delete($id)
    {
    	$employee=Employee::find($id);
    	$employee->delete();
    	return redirect('/employee/list');
    }
    public function profile()
    {
        return view('employee.profile');
    }
    public function test(){
        echo "Hello";
    }
}
