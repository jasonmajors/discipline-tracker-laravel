@extends('layouts.app')
@section('content')
<h1 class="text-center">Editting {{ $discipline->employee->firstname}} {{ $discipline->employee->lastname }} - {{ $discipline->reason }}</h1>
@endsection