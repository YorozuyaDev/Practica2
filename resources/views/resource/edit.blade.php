@extends('base')

@section('container')
<h1> Edición de helados </h1>
<form action="{{ url('resource/' . $resource['id']) }}" method="post">
    @csrf
    @method('put')
    <input value="{{  old('id', $resource['name']) }}" type="text"  name="name" placeholder="Nombre del helado" min-length="5" max-length="30" required />
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    <input value="{{  old('id', $resource['price']) }}" type="number" name="price" placeholder="Precio del helado"  min="1" step="0.01" required />
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    <input class="btn btn-info" type="submit" value="Congelar"/>
    
</form>

@endsection