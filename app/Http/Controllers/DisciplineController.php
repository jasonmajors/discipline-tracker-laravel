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
        $this->validate($request, [
            'type' => 'required|in:Verbal,Written,Suspension',
            'reason' => 'required',
            'effective' => 'required|max:255',
            'issued_by' => 'required',
            'description' => 'required'
        ]);
        
    	$discipline = $employee->disciplines()->create([
                                'type' => $request->type,
                                'reason' => $request->reason,
                                'effective' => $request->effective,
                                'issued_by' => $request->issued_by,
                                'description' => $request->description,
    	]);

        $discipline->employee_id = $employee->id;
        $discipline->entered_by = $request->user()->id;

        $discipline->save();

        return redirect()->action('DisciplineController@view', [$employee]);
    }

    /**
    * @param Request $request
    * @param Discipline $discipline
    * @return Response
    */
    public function destroy(Request $request, Discipline $discipline)
    {
        $discipline->delete();

        return redirect()->action('DisciplineController@view', [$discipline->employee_id]);
    }
}
