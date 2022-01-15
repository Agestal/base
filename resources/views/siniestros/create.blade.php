@include('header')
@include('top')
@include('left')

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
                <h3 class="card-title">Nueva Aseguradora</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{url('siniestros')}}" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="hidden" id="contador" value="{{$contador}}" />
                <div class="form-group"> 
                  <label> Cliente </label>
                  <select class="form-control select2 calculo" id="cliente" name="cliente" >
                      <option value="0" > - Escoge Cliente - </option>
                      @foreach ( $clientes as $c )
                        <option value="{{ $c->id }} " > {{$c->nombre}} - {{ $c->apellidos }} </option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group"> 
                  <label> Aseguradora </label>
                  <select class="form-control select2 calculo" name="aseguradora" id="aseguradora" >
                      <option value="0" > - Escoge Aseguradora - </option>
                      @foreach ( $aseguradoras as $a )
                        <option value="{{ $a->id }} " > {{$a->nombre}} </option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group"> 
                  <label>  Referencia TR </label>
                  <input type="text" class="form-control" name="codigo" id="codigo" />
                </div>
                <div class="form-group"> 
                  <label> Póliza </label>
                  <input type="text" class="form-control" name="poliza" id="poliza" />
                </div>
                <div class="form-group"> 
                  <label> Dirección </label>
                  <input type="text" class="form-control" name="direccion" id="direccion" />
                </div>
                <div class="form-group"> 
                  <label> Población </label>
                  <input type="text" class="form-control" name="poblacion" id="poblacion" />
                </div>
                <div class="form-group"> 
                  <label> Fecha Siniestro </label>
                  <input type="date" class="form-control" name="fecha" id="fecha" />
                </div>
                <div class="form-group"> 
                  <label> Comentario </label>
                  <textarea class="form-control" name="comentario" id="comentario" ></textarea> 
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
 <script>
$(document).ready(function() {
  $(".calculo").on('change', function() {
    var fecha = new Date();
	  var year = fecha.getFullYear();
    var codigo = $("#aseguradora").val();
    var contador = $("#contador").val();
    contador++;
    var cod = year+"-"+codigo+"-"+contador;
    $("#codigo").val(cod);
  }); 
  $("#cliente").on('change', function() {
    var id = $(this).val();
    $.ajax({
          method: "POST",
          headers: {"X-CSRF-TOKEN": "{{ csrf_token() }}" },
          url: "{{url('clientes/consultar_poliza')}}",
        data: { id : id }
    }).done(function(data) 
    {
        if (data) 
        {
            $("#poliza").val(data);
        } 
        else
        {
            alert('Error al consultar la póliza o el usuario no tiene póliza asignada.');
        }
    });
  });
});
</script>