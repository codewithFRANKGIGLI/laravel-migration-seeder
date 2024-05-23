@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">COD. TRENO</th>
                    <th scope="col">AZIENDA</th>
                    <th scope="col">STAZIONE DI PARTENZA</th>
                    <th scope="col">STAZIONE DI ARRIVO</th>
                    <th scope="col">ORARIO PARTENZA</th>
                    <th scope="col">ORARIO ARRIVO</th>
                    <th scope="col">NUMERO DI CARROZZE</th>
                    <th scope="col">IN ORARIO</th>
                    <th scope="col">CANCELLATO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <th>{{$train->codice_treno}}</th>
                    <td>{{$train->azienda}}</td>
                    <td>{{$train->stazione_partenza}}</td>
                    <td>{{$train->stazione_arrivo}}</td>
                    <td>{{$train->orario_partenza}}</td>
                    <td>{{$train->orario_arrivo}}</td>
                    <td>{{$train->numero_carrozze}}</td>
                    <td>{{$train->in_orario}}</td>
                    <td>{{$train->cancellato}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection