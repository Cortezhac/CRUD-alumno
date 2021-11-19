@extends('layouts.app');
@section('cuerpo')
<div class="container">
    <h2>Lista Grados</h2>
    <a href="{{route('/add-grade')}}">nuevo</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $grado )
                <tr>
                    <td>{{ $grado->id }}</td>
                    <td>{{ $grado->grd_nombre}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection