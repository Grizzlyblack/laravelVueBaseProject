@extends('layouts.app')

@section('content')
    @include('auth.form', $formType=['Login'])
@endsection
