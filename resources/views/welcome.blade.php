@extends('layouts.app')

@section('content')
@push('custom-style')
<style>
    nav, main{
  padding-left: 0px !important; 
}
</style>
@endpush
<h1>Hello</h1>
@endsection