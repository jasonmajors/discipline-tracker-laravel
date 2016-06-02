@extends('layouts.app')
@section('content')
    <h1 class="text-center">{{ $discipline->employee->firstname}} {{ $discipline->employee->lastname }}</h1>
    <h2 class="text-center">Issued: {{ $discipline->effective->format('m/d/Y')}}</h2>
    <p class="text-left">Issued by: {{ $discipline->issued_by }}</p>
    <p class="text-left">Type: {{ $discipline->type->type }}</p>
    <p class="text-left">Reason: {{ $discipline->reason }}</p>
    <p class="text-left">Description: {{ $discipline->description }}</p>
    <a href="{{ action('DisciplineController@edit', ['id' => $discipline->id]) }}">
        <button class="btn btn-default">Edit</button>
    </a>
@endsection