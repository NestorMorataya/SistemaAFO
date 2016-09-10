@extends('plantilla.plantilla')
<link rel="stylesheet" href="<?php echo URL::asset('css/ingreso.css') ?>" type="text/css">
@section('content')
<h1 id="tema">REGISTRO DE BIENES</h1>
<section id="camposGenerales">
	<div id="datosGenerales">
		<h2>DATOS GENERALES</h2>
	</div>
	<div id="camposGenerales1">
		<label class="etiquetas">Línea de Trabajo:</label>
		<input type="text" name="lineaTrabajo" class="textfield" pattern=" " title=" " required></input>
		<label class="etiquetas" style="margin-top:3%;">Fuente de Financiamiento:</label>
		<input type="text" name="fuenteFinanciamiento" class="textfield" pattern=" " title= " " required></input>
		<label class="etiquetas" style="margin-top:3%;">Unidad:</label>
		<input type="text" name="unidad" class="textfield" pattern=" " title=" " required></input>
		<label class="etiquetas" style="margin-top:3%;">Proveedor:</label>
		<input type="text" name="proveedor" class="textfield" pattern=" " title= " " required></input>
	</div>
	<div id="camposGenerales2">
		<label class="etiquetas">CEF:</label>
		<input type="text" name="cef" class="textfield" pattern=" " title=" " required></input>
		<label class="etiquetas" style="margin-top:3%;">Número de Factura:</label>
		<input type="text" name="numeroFactura" class="textfield" pattern=" " title= " " required style="margin-top:3%;"></input>
		<label class="etiquetas" style="margin-top:3%;">Fecha de Factura:</label>
		<input type="text" name="fechaFactura" class="textfield" pattern=" " title=" " required style="margin-top:3%;"></input>
		<label class="etiquetas" style="margin-top:3%;">Orden de Compra:</label>
		<input type="text" name="ordenCompra" class="textfield" pattern=" " title= " " required style="margin-top:3%;"></input>
	</div>	
</section>
<section id="camposBienes">
	<div id="camposBienes1">
		<div id="datosBienes">
			<h2>INGRESO DE BIENES</h2>
		</div>
		<label class="etiquetas">Descripción del bien:</label>
		<textarea type="text" name="descripcionBien" rows="5" class="textfield" pattern=" " title=" " required></textarea>
		<label class="etiquetas" style="margin-top:3%;">Marca:</label>
		<input type="text" name="marca" class="textfield" pattern=" " title= " " required style="margin-top:3%;"></input>
		<label class="etiquetas" style="margin-top:3%;">Modelo:</label>
		<input type="text" name="modelo" class="textfield" pattern=" " title=" " required style="margin-top:3%;"></input>
		<label class="etiquetas" style="margin-top:3%;">Serie:</label>
		<input type="text" name="serie" class="textfield" pattern=" " title= " " required style="margin-top:3%;"></input>
		<label class="etiquetas" style="margin-top:3%;"> Verificar Serie:</label>
		<input type="text" name="serieConfirmacion" class="textfield" pattern=" " title= " " required style="margin-top:3%;"></input>
	</div>
	<div id="camposIdentificacion1">
		<div id="datosIdentificacion">
			<h2>DATOS DE IDENTIFICACIÓN</h2>
		</div>
		<label class="etiquetas" style="margin-top:3%;">Ubicación:</label>
		<input type="text" name="ubicacion" class="textfield" pattern=" " title= " " required style="margin-top:3%;"></input>
		<label class="etiquetas" style="margin-top:3%;">Cuenta:</label>
		<input type="text" name="cuenta" class="textfield" pattern=" " title=" " required style="margin-top:3%;"></input>
		<label class="etiquetas" style="margin-top:3%;">Clase:</label>
		<input type="text" name="clase" class="textfield" pattern=" " title= " " required style="margin-top:3%;"></input>
		<label class="etiquetas" style="margin-top:3%;"> Correlativo:</label>
		<input type="text" name="correlativo" class="textfield" pattern=" " title= " " required style="margin-top:3%;"></input>
		<label class="etiquetas" style="margin-top:3%;">Especifico:</label>
		<input type="text" name="especifico" class="textfield" pattern=" " title=" " required style="margin-top:3%;"></input>
		<label class="etiquetas" style="margin-top:3%;">Fecha de Adquisición:</label>
		<input type="text" name="fechaAdquisicion" class="textfield" pattern=" " title= " " required style="margin-top:3%;"></input>
		<label class="etiquetas" style="margin-top:3%;"> Valor de Adquisición $:</label>
		<input type="text" name="valorAdquisicion" class="textfield" pattern=" " title= " " required style="margin-top:3%;"></input>
	</div>
</section>

@endsection