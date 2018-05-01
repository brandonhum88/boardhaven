@extends('layouts.master')

@section ('content')
<div class="container" style="padding: 40px 0;">
    <event-create-form
        csrf="{{ csrf_token() }}"
    ></event-create-form>

    @include ('partials.errors')
</div>
@endsection
