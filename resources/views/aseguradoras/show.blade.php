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
                <h3 class="card-title">Editar Aseguradora</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{url('asegyradoras/update')}}" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="hidden" name="_method" value="PUT"/>
                <input type="hidden" name="id" value="{{$c->id}}" />
                <div class="form-group"> 
                  <label> Nombre </label>
                  <input type="text" class="form-control" name="nombre" value="{{$c->nombre}}" />
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
                  <label> Código </label>
                  <input type="text" class="form-control" name="codigo" value="{{$c->codigo}}" />
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