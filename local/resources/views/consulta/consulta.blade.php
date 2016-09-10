
<link rel="stylesheet"  href="{{asset('css/consulta.css')}}">

@extends('plantilla.plantilla')
<link rel="stylesheet" href="<?php echo URL::asset('css/consulta.css') ?>" type="text/css">
<link rel="stylesheet" href="<?php echo URL::asset('css/boot/tbla.css') ?>" type="text/css">
@section('content')
<h1 id="tema">CONSULTA DE BIENES</h1>
<section id="consultas">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<th class="encabezado">ID</th>
				<th class="encabezado">IDENTIFICACIÓN</th>
				<th class="encabezado">DESCRIPCIÓN</th>
				<th class="encabezado">MARCA</th>
				<th class="encbezado">MODELO</th>
				<th class="encabezado">SERIE</th>
				<th class="encabezado">UBICACIÓN</th>
				<th class="encabezado">ESTADO</th>
				<th class="encabezado">UNIDAD</th>
				<th class="encabezado">VALOR</th>
				<th class="encabezado">BIEN PRINCIPAL</th>
			</thead>
			<tbody>
				@foreach($bien as $bienes)
				<tr class="text-center">
					<td> {{ $bienes->bien_pk }} </td>
					<td> {{ $bienes->identificacion_fk }} </td>
					<td> {{ $bienes->descripcion_equipo  }}  </td>
					<td> {{ $bienes->nombre_marca }} </td>
					<td> {{ $bienes->modelo  }}  </td>
					<td> {{ $bienes->serie  }}  </td>
					<td> {{ $bienes->ubicacion  }}  </td>
					<td> {{ $bienes->estado_fk  }}  </td>
					<td> {{ $bienes->nombre_unidad  }}  </td>
					<td> {{ $bienes->valor_adquisicion  }}  </td>
					<td> {{ $bienes->bien_principal_fk  }}  </td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $bien->render() !!}
	</div>
</section>
@endsection