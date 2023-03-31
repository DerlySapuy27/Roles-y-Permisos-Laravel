@extends('layouts.adminlite')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ $title }}
                </div>

                <div class="card-body">
                    <table id="datatable" class="table table-sm table-striped" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Documento</th>
                                <th>Nombre</th>
                                <th>Ciudad</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th><a href="{{ route('aprendices.add')}}" class="btn btn-success btn-sm"><i class="fa-solid fa-square-plus"></i></a></th> <!-- link del icono EDITAR -->

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($apprentices as $a)
                                <tr>
                                    <td>{{ $a->id}}</td>
                                    <td>{{ $a->document_number}}</td>
                                    <td>{{ $a->name}}</td>  
                                    <td>{{ $a->city}}</td>
                                    <td>{{ $a->email}}</td>
                                    <td>{{ $a->telefono}}</td>
                                    <td>
                                        <a href="{{ route('aprendices.edit', $a->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a> <!-- link del icono EDITAR -->
                                       <button class="btn btn-danger btn-sm" id="eliminar" value="{{$a->id}}"><i class="fa-solid fa-trash"></i></button><!-- Boton eliminar -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')

<script>

    $(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>
<script>
  $(document).on('click','#eliminar',function(){
    var id = $(this).val()
Swal.fire({
  title: '¿Estas seguro/a?'+id,
  text: "¡Esta acción no se puede revertir!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, Elimínalo!',
  cancelButtonText: 'Cancelar',
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Eliminado!',
      'El registro ha sido eliminado.',
      'Ok'
    )
    $(location).attr('href','{{url('aprendices/delete/')}}/'+id);
  }
})
});
</script>
@endsection
