<!-- Modal the edit-->
<div class="modal fade" id="edit {{$registro->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('home.update',$registro->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
      <div class="modal-body">
        <label for="">Nombre</label>
        <input type="text" name="name" id="" class="form-control" value='{{$registro->client_name}}'>

        <label for="">Apellido Paterno</label>
        <input type="text" name="lastname" id="" class="form-control" value='{{$registro->client_last_name}}'>

        <label for="">Apellido Materno</label>
        <input type="text" name="lastnames" id="" class="form-control" value='{{$registro->client_last_name_two}}'>

        <label for="">Direccion</label>
        <input type="text" name="address" id="" class="form-control" value='{{$registro->client_adress}}'>

        <label for="">Email</label>
        <input type="text" name="mail" id="" class="form-control" value='{{$registro->mail}}'>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>
