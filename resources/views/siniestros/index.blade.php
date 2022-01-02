@include('header')
@include('top')
@include('left')
<script>
$(document).ready(function() {
  $(".eliminar").on('click', function() {
    var id = $(this).attr('id');
    $.ajax({
          method: "POST",
          headers: {"X-CSRF-TOKEN": "{{ csrf_token() }}" },
          url: "{{ url('siniestros/eliminar') }}",
          data: { id : id }
      }).done(function(data) 
      {
          if (data == "1") 
          {
              location.reload();
          } 
          else
          {
              alert('Error al eliminar al cliente');
          }
      });
  });
  $(".editar").on('click', function() {
    var id = $(this).attr('id');
    var url = "{{ url('siniestros/show') }}";
    location.href = url+"/"+id;
  }); 
});
</script>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">TR peritaciones</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de siniestros</h3>
                <a class="btn btn-primary right" href=" {{ url('siniestros/create') }}" > Nuevo Siniestro </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="categorias" class="table table-stripped table-hover">
                  <thead>
                    <th> ID </th>
                    <th> Código </th>
                    <th> Cliente </th>
                    <th> Aseguradora </th>
                    <th> Editar </th>
                    <th> Eliminar </th>
                  </thead>
                  <tbody>
                    @foreach ( $datos as $d )
                      <tr>
                        <td> {{ $d->id }} </td>
                        <td> {{ $d->codigo }} </td>
                        <td> {{ $d->cliente }} </td>
                        <td> {{ $d->aseguradora }} </td>
                        <td> <input type="button" class="btn btn-info editar" value="EDITAR" id="{{$d->id}}" /> </td>
                        <td> <input type="button" class="btn btn-danger eliminar" value="ELIMINAR" id="{{ $d->id }}" /> </td>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 @include('footer')