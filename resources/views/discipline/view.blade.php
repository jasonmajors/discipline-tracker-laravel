@extends('layouts.app')
@section('content')
    <h1 class="text-center">{{ $employee->firstname}} {{ $employee->lastname }}</h1>
        <table class="table">
            <thead>
                <th>Effective</th>
                <th>Type</th>
                <th>Reason</th>
                <th>Issued By</th>
                <th>&nbsp</th>
                <th>&nbsp</th>
            </thead>
            <tbody>
            @foreach($employee->disciplines as $discipline) 
                <tr>
                    <td>{{ $discipline->effective->format('m/d/Y') }}</td>
                    <td>{{ $discipline->type }}</td>
                    <td>{{ $discipline->reason }}</td>
                    <td>{{ $discipline->issued_by }}</td>
                    <td>
                        <form action="/disciplines/{{ $discipline->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-default">Remove</button>
                        </form>
                    </td>  
                    <td>
                        <a href="{{ action('DisciplineController@show', ['id' => $discipline->id ]) }}">
                            <button class="btn btn-default">View</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>       
    <!-- Add New Discipline -->
    <div class="row">
        <h2 class="text-center">Add New Discipline</h2>   
        @include('common.errors')
        <form class="form-horizontal" action="/disciplines/{{ $employee->id }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="discipline_type" class="col-sm-2 col-sm-offset-2 control-label">Type</label>
                <div class="col-sm-4">
                    <select name="type" class="form-control">
                        <option value="Verbal">Verbal</option>
                        <option value="Written">Written</option>
                        <option value="Suspension">Suspension</option>
                    </select>   
                </div>  
            </div>
            <div class="form-group">
                <label for="discipline_reason" class="col-sm-2 col-sm-offset-2 control-label">Reason</label>
                <div class="col-sm-4">
                    <input type="text" name="reason" class="form-control" id="discipline_reason" placeholder="Reason">
                </div>  
            </div>
            <div class="form-group">
                <label for="discipline_effective" class="col-sm-2 col-sm-offset-2 control-label">Effective</label>
                <div class="col-sm-4">
                    <input type="date" name="effective" class="form-control" id="discipline_effective" placeholder="Effective">
                </div>  
            </div>
            <div class="form-group">
                <label for="discipline_issued_by" class="col-sm-2 col-sm-offset-2 control-label">Issued by</label>
                <div class="col-sm-4">
                    <input type="text" name="issued_by" class="form-control" id="discipline_issued_by" placeholder="Issued by">
                </div>  
            </div>
            <div class="form-group">
                <label for="discipline_description" class="col-sm-2 col-sm-offset-2 control-label">Description</label>
                <div class="col-sm-4">
                    <textarea rows="4" cols="75" name="description" class="form-control" id="discipline_description"></textarea>    
                </div>  
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
                    <button type="submit" class="btn btn-default">Add Discipline</button>
                </div>
            </div>
        </form>      
    </div>     
@endsection