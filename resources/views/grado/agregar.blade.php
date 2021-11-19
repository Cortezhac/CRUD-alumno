@extends('layouts.app')
@section('cuerpo')
<div class="container">
    <form action="{{route('/save-grade')}}" method="post">
        @csrf
        <label for="name">Nombre Grado</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Guardar">
    </form>
</div>
@endsection
