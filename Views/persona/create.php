<form action="store.php" method="POST">
    <div class="row">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido: </label>
            <input type="text" class="form-control" id="apellido" name="apellido">
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad: </label>
            <input type="text" class="form-control" id="edad" name="edad">
        </div>
        <div class="mb-3">
            <label for="n_documento" class="form-label">Número de Documento: </label>
            <input type="text" class="form-control" id="n_documento" name="n_documento">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>