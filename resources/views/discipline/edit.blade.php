@extends('layouts.app')
@section('content')
<h1 class="text-center">Editting {{ $discipline->employee->firstname}} {{ $discipline->employee->lastname }} - {{ $discipline->reason }}</h1>
<div class="row"> 
    @include('common.errors')
    <form class="form-horizontal" action="/disciplines/{{ $discipline->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="discipline_type" class="col-sm-2 col-sm-offset-2 control-label">Type</label>
            <div class="col-sm-4">
                <select name="type_id" class="form-control" id="discipline_type">
                    @if ($discipline->type_id == '1')
                        <option value="1" selected>Verbal</option>
                        <option value="2">Written</option>
                        <option value="3">Suspension</option>
                    @elseif ($discipline->type_id == '2')
                        <option value="1">Verbal</option>
                        <option value="2" selected>Written</option>
                        <option value="3">Suspended</option>
                    @elseif ($discipline->type_id == '3')
                        <option value="1">Verbal</option>
                        <option value="2">Written</option>
                        <option value="3" selected>Suspension</option>
                    @endif
                </select>   
            </div>  
        </div>
        <div class="form-group">
            <label for="discipline_reason" class="col-sm-2 col-sm-offset-2 control-label">Reason</label>
            <div class="col-sm-4">
                <input type="text" name="reason" class="form-control" id="discipline_reason" value="{{ $discipline->reason }}">
            </div>  
        </div>
        <div class="form-group">
            <label for="discipline_effective" class="col-sm-2 col-sm-offset-2 control-label">Effective</label>
            <div class="col-sm-4">
                <input type="date" name="effective" class="form-control" id="discipline_effective" value="{{ $discipline->effective->format('Y-m-d') }}">
            </div>  
        </div>
        <div class="form-group">
            <label for="discipline_issued_by" class="col-sm-2 col-sm-offset-2 control-label">Issued by</label>
            <div class="col-sm-4">
                <input type="text" name="issued_by" class="form-control" id="discipline_issued_by" value="{{ $discipline->issued_by }}">
            </div>  
        </div>
        <div class="form-group">
            <label for="discipline_description" class="col-sm-2 col-sm-offset-2 control-label">Description</label>
            <div class="col-sm-4">
                <textarea rows="4" cols="75" name="description" class="form-control" id="discipline_description">{{ $discipline->description }}</textarea>    
            </div>  
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                <button type="submit" class="btn btn-default">Update Discipline</button>
            </div>
        </div>
    </form>      
</div>     
@endsection