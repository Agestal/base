@include('header')
@include('top')
@include('left')
<script>
$(document).ready(function() {

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
                <h3 class="card-title">Nuevo Cliente</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{url('clientes')}}" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="form-group"> 
                  <label> Nombre </label>
                  <input type="text" class="form-control" name="nombre" />
                </div>
                <div class="form-group"> 
                  <label> Apellidos </label>
                  <input type="text" class="form-control" name="apellidos" />
                </div>
                <div class="form-group"> 
                  <label> NIF </label>
                  <input type="text" class="form-control" name="nif" />
                </div>
                <div class="form-group"> 
                  <label> Email </label>
                  <input type="text" class="form-control" name="email" />
                </div>
                <div class="form-group"> 
                  <label> Teléfono </label>
                  <input type="text" class="form-control" name="telefono" />
                </div>
                <div class="form-group"> 
                  <label> Población </label>
                  <input type="text" class="form-control" name="poblacion" />
                </div>
                <div class="form-group"> 
                  <label> Dirección </label>
                  <input type="text" class="form-control" name="direccion" />
                </div>
                <div class="form-group"> 
                  <label> Código Postal </label>
                  <input type="text" class="form-control" name="codigo_postal" />
                </div>
                <div class="form-group"> 
                  <label> Póliza </label>
                  <input type="text" class="form-control" name="poliza" />
                </div>
                <div class="form-group"> 
                  <input type="submit" class="btn btn-success" value="GUARDAR" />
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 @include('footer')