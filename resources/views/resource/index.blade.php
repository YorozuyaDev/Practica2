@extends('base')
@section('container')
<div class="modal" id="modalDelete" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Confirm delete?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form id="modalDeleteResourceForm" action="" method="post">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-primary" value="Delete resource"/>
        </form>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<h1>Helados disponibles</h1>
<br>
  <div class="flex-center d-flex">
       <table class="table">
        @foreach($resources as $resource) 
        <tr>
            <td> {{ $resource['id'] }}</td>
            <td> {{ $resource['name'] }}</td>
            <td> {{ $resource['price'] }}</td>
            <td>
                <a class="btn btn-info" href="{{ url('resource/'.$resource['id'].'/edit') }}">Editar</a>
                 &nbsp; &nbsp;  &nbsp;   &nbsp;  &nbsp;
              <!--   <a class="btn btn-danger" href="{{ url('resource/'.$resource['id']) }}">Eliminar</a> -->
                
                  <form class="deleteForm" action="{{ url('resource/' . $resource['id']) }}" method="post">
                        @method('delete')
                        @csrf
                        <a class="btn btn-danger" href="javascript: void(0);" data-url="{{ url('resource/' . $resource['id']) }}" data-bs-toggle="modal" data-bs-target="#modalDelete">Descongelar</a>
                    </form>
         </td>
        </tr>
        @endforeach
       </table>
    </div>
<p> Pulsa el siguiente botón para administrar los helados disponibles </p>
    <div class="flex-center d-flex">
        <a class="btn btn-success" href="{{ url('resource/create') }}">Añadir</a>
        &nbsp; &nbsp;  &nbsp;  &nbsp;
        <a class="btn btn-info" href="{{ url('resource/show') }}">Mostrar</a>
   </div>   
   <br>
    <div class="flex-center d-flex">
        <a class="btn btn-danger" href="{{ url('resource/all/flush') }}">Desenchufar congelador</a>
    </div>    

@endsection