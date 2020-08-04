@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($screens as $screen)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"> Pantalla {{$screen->codigo}}</div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{ route('admin.screens.update', ['screen' => $screen->id]) }}" method="POST">

                            @csrf

                            {{method_field('PUT')}}
                            <p>{{$screen->codigo}}</p>
                            <p>{{$screen->id}}</p>
                            <div class="form-group row">
                                <label for="picture" class="col-md-4 col-form-label text-md-right">
                                    Selecciona el archivo
                                </label>
                                <div class="col-md-6">
                                    <input id="picture" type="file" class="form-control input-chicmua file" name="picture" value="{{isset($screen->picture) ? $screen->picture:''}}" autofocus/>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Editar</button>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection