<?php include("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">
        Crear de recolecciones
    </div>
    <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="Metodo_Prodencia" class="form-label">Metodo de Procedencia</label>
      <input type="text"
        class="form-control" name="Metodo_Prodencia" id="Metodo_Prodencia" aria-describedby="helpId" placeholder="">
    </div>
    
    <button type="submit" class="btn btn-success">Agregar</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>
    
    </div>
    <div class="card-footer text-muted">

    </div>
</div>

<?php include("../../templates/footer.php"); ?>