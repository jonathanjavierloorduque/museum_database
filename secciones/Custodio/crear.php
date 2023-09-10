<?php include("../../templates/header.php"); ?>
<br/>

<div class="card">
    <div class="card-header">
        Crear Custodio
    </div>
    <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="Cod_persona" class="form-label">Codigo de la persona</label>
      <input type="text"
        class="form-control" name="Cod_persona" id="Cod_persona" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="Rol_persona" class="form-label">Rol de la persona</label>
      <input type="text"
        class="form-control" name="Rol_persona" id="Rol_persona" aria-describedby="helpId" placeholder="">
    </div>
    
    <button type="submit" class="btn btn-success">Agregar</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>
    
    </div>
    <div class="card-footer text-muted">

    </div>
</div>
<?php include("../../templates/footer.php"); ?>