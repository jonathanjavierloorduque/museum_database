<?php include("../../templates/header.php"); ?>
Crear de objetos

<div class="card">
    <div class="card-header">
        Datos del objeto
    </div>
    <div class="card-body">
    <form action="" method="post"entype="multipart/form-data">

    <div class="mb-3">
      <label for="cod_objeto" class="form-label">Codigo del Objeto</label>
      <input type="text"
        class="form-control" name="cod_objeto" id="cod_objeto" aria-describedby="helpId" placeholder="Codigo del Objeto">
    </div>

    <div class="mb-3">
      <label for="num_registro" class="form-label">Numero de registro</label>
      <input type="text"
        class="form-control" name="num_registro" id="num_registro" aria-describedby="helpId" placeholder="">
      <small id="helpId" class="form-text text-muted">Help text</small>
    </form>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>


<?php include("../../templates/footer.php"); ?>