@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
	<div class="offset-md-3 col-md-6">
		<div class="card">
			<div class="card-header text-center">
				Crear Consulta	
			</div>
			<div class="card-body" style="padding:30px">

				{{-- TODO: Abrir el formulario e indicar el método POST --}}
				<form action='{{url("consultas")}}' method="POST">
					

					{{-- TODO: Protección contra CSRF --}}
					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="title">Titulo de la consulta</label>
						<input type="text" name="title" id="title" class="form-control" >
					</div>

					<div class="form-group">
						<label for="consulta">Consulta</label>
						<textarea name="consulta" id="consulta" class="form-control" rows="3" > </textarea>
					</div>

					<div class="form-group">
						{{-- TODO: Completa el input para el año --}}
						<label for="horaInicio">Hora Inicio</label>
						<input type="date" name="horaInicio" id="horaInicio" class="form-control" >
					</div>

					<div class="form-group">
						{{-- TODO: Completa el input para el director --}}
						<label for="horaFinal">Hora final</label>
						<input type="date" name="horaFinal" id="horaFinal" class="form-control">
					</div>

					

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							CREAR CONSULTA
						</button>
					</div>

					{{-- TODO: Cerrar formulario --}}
				</form>
			</div>
		</div>
	</div>
</div>

@stop