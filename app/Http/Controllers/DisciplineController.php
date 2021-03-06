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
    public function viewAll(Employee $employee)
    {
    		return view('discipline.viewAll', ['employee' => $employee]);
    }

    /**
    * @param Request $request
    * @param Employee $employee
    * @return Response
    */
    public function store(Request $request, Employee $employee)
    {
        $this->validate($request, [
            'type_id' => 'required',
            'reason' => 'required|max:255',
            'effective' => 'required',
            'issued_by' => 'required',
            'description' => 'required'
        ]);
        
    	$discipline = $employee->disciplines()->create([
                                'type_id' => $request->type_id,
                                'reason' => $request->reason,
                                'effective' => $request->effective,
                                'issued_by' => $request->issued_by,
                                'description' => $request->description,
    	]);
        // Save the values that are not mass assignable
        $discipline->employee_id = $employee->id;
        $discipline->entered_by = $request->user()->id;

        $discipline->save();

        \Session::flash('success', 'Discipline added');
        
        return redirect()->action('DisciplineController@viewAll', [$employee]);
    }

    /**
    * View a specific Discipline
    *
    * @param  Discipline $discipline
    * @return Response
    */
    public function show(Discipline $discipline)
    {
        return view('discipline.show', ['discipline' => $discipline]);
    }

    /**
    * Show the form for editing the a Discipline entry
    *
    * @param  Discipline $discipline
    * @return Response
    */
   public function edit(Discipline $discipline)
   {
      return view('discipline.edit', ['discipline' => $discipline]);
   }

   /**
    * Update the specified Discipline entry
    *
    * @param  Discipline $discipline
    * @return Response
    */
   public function update(Request $request, Discipline $discipline)
   {
        $this->validate($request, [
            'type_id' => 'required',
            'reason' => 'required',
            'effective' => 'required|max:255',
            'issued_by' => 'required',
            'description' => 'required'
        ]);

        $discipline->type_id = $request->type_id;
        $discipline->reason = $request->reason;
        $discipline->effective = $request->effective;
        $discipline->issued_by = $request->issued_by;
        $discipline->description = $request->description;
        $discipline->save();

        \Session::flash('success', 'Updated succesful');

        return redirect()->action('DisciplineController@viewAll', [$discipline->employee_id]);
   }

    /**
    * @param Request $request
    * @param Discipline $discipline
    * @return Response
    */
    public function destroy(Request $request, Discipline $discipline)
    {
        $discipline->delete();

        return redirect()->action('DisciplineController@viewAll', [$discipline->employee_id]);
    }
}
