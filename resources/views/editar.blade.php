<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="title m-b-md">
                    <h1>Comedor de la unerg!</h1>
                    <form action="{{route('obreros.update',$comedors->id)}}" method="POST">
				    {!!csrf_field()!!}
                <div class="form-group">
                  <input type="hidden" value="PUT" name="_method">

                  <input type="text" class="form-control" name="cedula" value="{{$comedors->cedula}}">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nombre" value="{{$comedors->nombre}}">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="apellido" value="{{$comedors->apellido}}">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="telefono" value="{{$comedors->telefono}}">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="estatus" value="{{$comedors->estatus}}">
                </div>
                <div class="form-group">
                  <input type="date" class="form-control" name="fecha_ingreso" value="{{$comedors->fecha_ingreso}}">
                </div>
	            <div class="box-footer clearfix">
	              <input value="Enviar" type="submit" class="pull-right btn btn-default">
	                <i class="fa fa-arrow-circle-right"></i>
	            </div>
              </form>
</div>
<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>