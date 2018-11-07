<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="border-radius: 8px;">
			<div class="modal-header">
				<h4 class="modal-title fontfamilynunito" style="display: inline; font-weight: 1000;" id="exampleModalLabel">NUEVO PRÉSTAMO</h4>
				<button type="button" id="" style="display: inline;color: red;outline:none;" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fa fa-circle"></i></span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Equipos</label>
					<select name="tags[]" class="form-control select2" 
					multiple="multiple" 
					data-placeholder="Selecciona una o mas etiquetas" 
					style="width: 100%;">
					<option value="">Seleccione un equipo</option>
					<option value="1">proyector 1</option>
					<option value="2">proyector 2</option>
					<option value="3">laptop asus</option>
					<option value="3">extensión</option>
				</select>
				{!! $errors->first('tags','<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group">
				<label>Usuario</label><br>
				<select name="user_id" class="form-control select2" style="width: 100%;">
					<option value="">Seleccione un usuario</option>
					<option value="1">Ing. Edgar Taya</option>
					<option value="2">Ing. Gianfranco Malaga</option>
					<option value="3">Ing. Evert Osco</option>
					<option value="4">Ing. Luis Mori</option>
					<option value="5">Ing. Manuel Barraza</option>
				</select>
			</div>	

			<div class="form-group">
				<label>Curso</label>
				<select name="curso_id" class="form-control select2" style="width: 100%;">
					<option value="">Seleccione un curso</option>
					<option value="1">Base de Datos</option>
					<option value="1">Matemática II</option>
					<option value="1">Telemática</option>
					<option value="1">Métodos Cuantitativos</option>
					<option value="1">Gestión de la Ecoeficiencia</option>
				</select>
				{!! $errors->first('category_id','<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group">
				<label>Ubicación</label>
				<select name="ubicacion_id" class="form-control select2" style="width: 100%;">
					<option value="">Seleccione una ubicación</option>
					<option value="1">Mecánica 3er piso</option>
					<option value="1">Minas 2 piso</option>
					<option value="1">Laboratorio C</option>
					<option value="1">Laboratorio A</option>
					<option value="1">Administración 2 piso</option>
				</select>
				{!! $errors->first('category_id','<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group">
				<label>Hora Fin</label>
				<div class="well">
					<div id="datetimepicker1" class="input-append date">
						<input data-format="hh:mm" type="text"></input>
						<span class="add-on" style="display: inline;">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar" class="fa fa-calendar" style="display: inline;">
							</i>
						</span>
					</div>
				</div>
			</div>	
		</div> {{-- modal body --}}
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			<button type="button" class="btn btn-primary">Guardar</button>
		</div>
	</div>
</div>
</div>