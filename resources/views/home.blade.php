@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <table  class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Nivel de batería</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $dato)
                    <tr>
                        <td>{{$dato->fecha_hora}}</td>
                        <td>{{$dato->nivel}}</td>
                    </tr>  
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
