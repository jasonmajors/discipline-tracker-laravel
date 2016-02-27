<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Employee;

class EmployeeController extends Controller
{
    /**
    * Create a new controller instance
    *
    * @return void
    */
    public function __construct()
    {
    	$this->middleware('auth');
    }

    /**
    * Display all the employees
    *
    * @param Request $request
    * @return Response
    */
    public function index(Request $request)
    {
    	$employees = Employee::all();

    	return view('employees.index', ['employees' => $employees]);
    }

    /**
    * Return the form to create a new Employee
    *
    * @param Request $request
    * @return Response
    */
    public function add(Request $request)
    {
        return view('employees.add');
    }

    /**
    * Create a new Employee
    *
    * @param Request $request
    * @return Response
    */
    public function store(Request $request)
    {
        Employee::create([
                        'emp_id' => $request->emp_id,
                        'firstname' => $request->firstname,
                        'lastname' => $request->lastname,
                        'dept' => $request->dept,
                        'title' => $request->title,
                            ]);
        
        return redirect('/employees');
    }
}
