<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Discipline;
use App\Employee;

class DisciplineController extends Controller
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
    * View an employee's disciplinary history
    *
    * @param Request $request
    * @param Employee $employee
    * @return Response
    */
    public function view(Request $request, Employee $employee)
    {
    		return view('discipline.view', ['employee' => $employee]);
    }

    /**
    * @param Request $request
    * @param Employee $employee
    * @return Response
    */
    public function store(Request $request, Employee $employee)
    {
    	$discipline = $employee->disciplines()->create([
                                'type' => $request->type,
                                'effective' => $request->effective,
                                'issued_by' => $request->issuedby,
                                'description' => $request->description,
    	]);

        $discipline->employee_id = $employee->id;
        $discipline->entered_by = $request->user()->id;

        $discipline->save();

        return redirect('/');
    }
}
