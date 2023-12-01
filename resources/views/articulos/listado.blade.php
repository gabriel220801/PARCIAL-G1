@extends('base')

@section('content')
<table class="table">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Referencia</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Color</th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">Observacion</th>
            <th scope="col">Foto</th>
            <th scope="col">Marca</th>

            </tr>
        </thead>
        <tbody>
            @php
                $i = 1; 
            @endphp
            @foreach($article as $a)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$a->referencia}}</td>
                <td>{{$a->nombre}}</td>
                <td>{{$a->descripcionA}}</td>
                <td>{{$a->color}}</td>
                <td>{{$a->precioUnitario}}</td>
                <td>{{$a->observacion}}</td>
                <td>{{$a->foto}}</td>
                <td>{{$a->descripcion}}</td>
                
                @php 
                    $i = $i + 1;
                @endphp
            </tr>
            @endforeach

        </tbody>
</table>
@endsection