@extends('base')

@section('container')
<h1> Creación de helados </h1>
<form action="{{ url('resource') }}" method="post">
    @csrf
    <input value="Un rico helado" type="text"  name="name" placeholder="Nombre del helado" min-length="5" max-length="30" required />
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    <input value="Precio" type="number" name="price" placeholder="Precio del helado" min="0.5" step=0.01 required />
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    <input class="btn btn-info" type="submit" value="Congelar"/>
    
</form>

@endsection