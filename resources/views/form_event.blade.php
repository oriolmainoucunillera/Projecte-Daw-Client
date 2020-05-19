@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Afegir tasca
                        <a class="float-right btn btn-success" href="{{route('eventos')}}">Tornar</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('evento_crear')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Tasca</label>
                            <input type="text"  class="form-control" name="titol">
                        </div>
                        <div class="form-group">
                            <label>Data</label>
                            <input type="datetime-local" class="form-control" name="data_hora">
                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
