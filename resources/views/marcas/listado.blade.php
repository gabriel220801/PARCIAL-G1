@extends('base')

@section('content')

<table class="table">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Codigo</th>
            <th scope="col">Marca</th>

            </tr>
        </thead>
        <tbody>
            @php
                $i = 1; 
            @endphp
            @foreach($mark as $m)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$m->idMarca}}</td>
                <td>{{$m->descripcion}}</td>
                
                
                @php 
                    $i = $i + 1;
                @endphp
            </tr>
            @endforeach

        </tbody>
</table>
@endsection