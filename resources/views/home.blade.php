@extends('layouts.app',['alerts' => $alerts])

@section('content')
          @asyncWidget('new_screens')
@endsection
