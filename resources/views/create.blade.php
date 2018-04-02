<form method="POST" v-on:submit.prevent = 'createKeep'>
<div class="modal fade" id="create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss='modal'>
					<span>&times;</span>

				</button>
				<h4>Nueva Tarea</h4>
			</div>
			<div class="modal-body">
				<label for="razon">Nombre</label>
				<input type="text" name="razon" class="form-control" v-model='newrazon'>
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>

				<label for="razon">Ruc</label>
				<input type="text" name="ruc" class="form-control" v-model='newruc'>
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>

				<label for="razon">Direccion</label>
				<input type="text" name="direccion" class="form-control" v-model='newdireccion'>
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>

				<label for="razon">Telefono</label>
				<input type="text" name="telefono" class="form-control" v-model='newtelefono'>
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>

			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Guardar">
			</div>
		</div>
	</div>
</div>
</form>