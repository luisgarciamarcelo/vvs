@extends('layouts.app',['alerts' => $alerts])

@section('content')
    @asyncWidget('alert_screens')
@endsection