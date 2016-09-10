<link rel="stylesheet"  href="{{asset('css/consulta.css')}}">
@extends('plantilla.plantilla')

@section('content')
<h1 id="tema">CONSULTA DE BIENES</h1>
<section id="consultas">
	<div class="table-responsive">

			<div id="datosGenerales">
				<h2>BIENES</h2>
			</div>
			

				<table class="table">
					<thead>
						<th class="text-center">bien_pk  </th>
						<th class="text-center">identificacion  </th>
						<th class="text-center">marca  </th>
						<th class="text-center">descripcion</th>
						<th class="text-center">modelo</th>
						<th class="text-center">serie</th>
						<th class="text-center">ubicacion</th>
                        <th class="text-center">estado</th>
						
					</thead>
				
					<tbody>
						@foreach($bien as $bienes)
						<tr class="text-center">
			              <td> {{ $bienes->bien_pk }} </td>
			              <td>  {{ $bienes->identificacion_fk }} </td>
			              <td>  {{ $bienes->nombre_marca }} </td>
			              <td>  {{ $bienes->descripcion_equipo  }}  </td>
			              <td> {{  $bienes->modelo  }}  </td>
			               <td> {{  $bienes->serie  }}  </td>
			               <td> {{  $bienes->ubicacion  }}  </td>
			               <td> {{  $bienes->estado_fk  }}  </td>
			               
			               
		                </tr>
		                @endforeach
					</tbody>
				</table>
		
			
			
                {!! $bien->render() !!}
             </div>

		   </section>

                @endsection