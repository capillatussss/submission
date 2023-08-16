@extends('layout')

@section('content')
    <x-card-section></x-card-section>
    
    <x-table-section :records="$records"></x-table-section>
    <x-table-body :records="$records"></x-table-body>
@endsection
