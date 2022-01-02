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
                <h3 class="card-title">Editar Cliente</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{url('clientes/update')}}" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="hidden" name="_method" value="PUT"/>
                <input type="hidden" name="id" value="{{$c->id}}" />
                <div class="form-group"> 
                  <label> Nombre </label>
                  <input type="text" class="form-control" name="nombre" value="{{$c->nombre}}" />
                </div>
                <div class="form-group"> 
                  <label> Apellidos </label>
                  <input type="text" class="form-control" name="apellidos" value="{{$c->apellidos}}" />
                </div>
                <div class="form-group"> 
                  <label> NIF </label>
                  <input type="text" class="form-control" name="nif" value="{{$c->nif}}" />
                </div>
                <div class="form-group"> 
                  <label> Email </label>
                  <input type="text" class="form-control" name="email" value="{{$c->email}}" />
                </div>
                <div class="form-group"> 
                  <label> Teléfono </label>
                  <input type="text" class="form-control" name="telefono" value="{{$c->telefono}}" />
                </div>
                <div class="form-group"> 
                  <label> Población </label>
                  <input type="text" class="form-control" name="poblacion" value="{{$c->poblacion}}" />
                </div>
                <div class="form-group"> 
                  <label> Dirección </label>
                  <input type="text" class="form-control" name="direccion" value="{{$c->direccion}}" />
                </div>
                <div class="form-group"> 
                  <label> Código Postal </label>
                  <input type="text" class="form-control" name="codigo_postal" value="{{$c->codigo_postal}}" />
                </div>
                <div class="form-group"> 
                  <label> Póliza </label>
                  <input type="text" class="form-control" name="poliza" value="{{$c->poliza}}" />
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