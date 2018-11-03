<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comedor</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <h1>Comedor de la unerg!</h1>
                    <form action="{{route('obreros.store')}}" method="POST">
				    {!!csrf_field()!!}
                <div class="form-group">
                  <input type="text" class="form-control" name="cedula" placeholder="Cedula">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="telefono" placeholder="Telefono">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="estatus" placeholder="Estatus">
                </div>
                <div class="form-group">
                  <input type="date" class="form-control" name="fecha_ingreso" placeholder="Fecha de Ingreso">
                </div>
	            <div class="box-footer clearfix">
	              <input value="Enviar" type="submit" class="pull-right btn btn-default">
	                <i class="fa fa-arrow-circle-right"></i>
	            </div>
              </form>
                </div>

                <div>
                	<h1>Lista de obreros del comedor!</h1>
                <table>
                	<thead>
                		<tr>
                			<th>id</th>
                			<th>nombre</th>
                			<th>apellido</th>
                			<th>cedula</th>
                			<th>telefono</th>
                			<th>estatus</th>
                			<th>fecha de ingreso</th>
                			<th>Accion</th>
                		</tr>
                	</thead>
                	<tbody>
                	@foreach($comedors as $comedor)
                		<tr>
                			<td>{{$comedor->id}}</td>
                			<td>{{$comedor->nombre}}</td>
                			<td>{{$comedor->apellido}}</td>
                			<td>{{$comedor->cedula}}</td>
                			<td>{{$comedor->telefono}}</td>
                			<td>{{$comedor->estatus}}</td>
                			<td>{{$comedor->fecha_ingreso}}</td>
                			<td>
                				<form action="{{route('obreros.destroy',$comedor->id)}}" method="post">{!!csrf_field()!!}

								<a href="{{route('obreros.edit',$comedor->id)}}" class="btn btn-warning" title="Editar">Editar</a>

								<input type="hidden" value="DELETE" name="_method">
								<input class="btn btn-danger" type="submit" title="Eliminar" value="Eliminar">
							</form>
                			</td>
                		</tr>
                	@endforeach
                	</tbody>
                </table>

                </div>
                <div>
                	<h1>Lista de usuario activos</h1>
                	<table>
                		<thead>
                			<tr>
                				<th>Nombre</th>
                				<th>Apellido</th>
                				<th>Estatus</th>
                			</tr>
                		</thead>
                		<tbody>
                			@foreach($estatus_n as $estatus)
                			<tr>
                				<td>{{$estatus->nombre}}</td>
                				<td>{{$estatus->apellido}}</td>
                				<td>{{$estatus->estatus}}</td>
                			</tr>
                			@endforeach
                		</tbody>
                	</table>
                </div>
                <div>
                	<h1>Lista de usuarios mas nuevos</h1>
                	<table>
                		<thead>
                			<tr>
                				<th>Nombre</th>
                				<th>Apellido</th>
                				<th>Fecha de ingreso</th>
                			</tr>
                		</thead>
                		<tbody>
                			@foreach($fecha_n as $fecha)
                			<tr>
                				<td>{{$fecha->nombre}}</td>
                				<td>{{$fecha->apellido}}</td>
                				<td>{{$fecha->fecha_ingreso}}</td>
                			</tr>
                			@endforeach
                		</tbody>
                	</table>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
    </body>
</html>
