@extends('layouts.master')

@section ('content')
    {{ auth() -> user() -> name }}
@endsection
