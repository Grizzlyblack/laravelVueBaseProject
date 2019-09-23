@extends('layouts.app')

@section('content')
    @include('auth.form', $formType=["Register"])
@endsection
