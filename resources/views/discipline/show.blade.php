@extends('layouts.app')
@section('content')
    <h1 class="text-center">{{ $discipline->employee->firstname}} {{ $discipline->employee->lastname }}</h1>
    <h2 class="text-center">Issued: {{ $discipline->effective->format('m/d/Y')}}</h2>
@endsection