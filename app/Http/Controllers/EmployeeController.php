<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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

    public function index(Request $request)
    {
    	$employees = Employee::all();

    	return view('employees.index', ['employees' => $employees]);
    }
}
