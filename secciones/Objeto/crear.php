/*conectar a la base de datos*/
<?php include("../../bd.php"); 
if($_POST){
  print_r($_POST);
  //Recolectamos los datos del metodo POST
  $cod_objeto=(isset($_POST["cod_objeto"])?$_POST["cod_objeto"]:"");
  $Inventariado_por=(isset($_POST["Inventariado_por"])?$_POST["Inventariado_por"]:"");
  $Numero_registro=(isset($_POST["Numero_registro"])?$_POST["Numero_registro"]:"");
  $Bien_cultural=(isset($_POST["Bien_cultural"])?$_POST["Bien_cultural"]:"");
  $Material=(isset($_POST["Material"])?$_POST["Material"]:"");
  $Periodo_historico=(isset($_POST["Periodo_historico"])?$_POST["Periodo_historico"]:"");
  $Cronologia=(isset($_POST["Cronologia"])?$_POST["Cronologia"]:"");
  $Fijacion_cultural=(isset($_POST["Fijacion_cultural"])?$_POST["Fijacion_cultural"]:"");
  $Fotografia=(isset($_POST["Fotografia"])?$_POST["Fotografia"]:"");
  $Descripcion_fotografia=(isset($_POST["Descripcion_fotografia"])?$_POST["Descripcion_fotografia"]:"");
  $Procedencia_del_bien_cultural=(isset($_POST["Procedencia_del_bien_cultural"])?$_POST["Procedencia_del_bien_cultural"]:"");
  $Nombre_del_sitio=(isset($_POST["Nombre_del_sitio"])?$_POST["Nombre_del_sitio"]:"");
  $Investigador_responsable_procedencia=(isset($_POST["Investigador_responsable_procedencia"])?$_POST["Investigador_responsable_procedencia"]:"");
  $Unidad_Cateo=(isset($_POST["Unidad_Cateo"])?$_POST["Unidad_Cateo"]:"");
  $Nivel=(isset($_POST["Nivel"])?$_POST["Nivel"]:"");
  $Profundidad=(isset($_POST["Profundidad"])?$_POST["Profundidad"]:"");
  $Nombre_del_Proyecto=(isset($_POST["Nombre_del_Proyecto"])?$_POST["Nombre_del_Proyecto"]:"");
  $Codigo_de_control_de_investigacion=(isset($_POST["Codigo_de_control_de_investigacion"])?$_POST["Codigo_de_control_de_investigacion"]:"");
  $Descripcion_del_contexto_arqueologico=(isset($_POST["Descripcion_del_contexto_arqueologico"])?$_POST["Descripcion_del_contexto_arqueologico"]:"");
  $Regimen_custodia=(isset($_POST["Regimen_custodia"])?$_POST["Regimen_custodia"]:"");
  $codigo_anterior_info_relacionada=(isset($_POST["codigo_anterior_info_relacionada"])?$_POST["codigo_anterior_info_relacionada"]:"");
  $Fichas_relacionadas=(isset($_POST["Fichas_relacionadas"])?$_POST["Fichas_relacionadas"]:"");
  $Otros_Codigos=(isset($_POST["Otros_Codigos"])?$_POST["Otros_Codigos"]:"");
  $Observaciones=(isset($_POST["Observaciones"])?$_POST["Observaciones"]:"");
  $Bibliografa=(isset($_POST["Bibliografa"])?$_POST["Bibliografa"]:"");
  //Preparamos la sentencia de SQL para la insercion de datos 
  $sentencia=$conexion->prepare("INSERT INTO objeto (cod_objeto,Inventariado_por,Numero_registro,Bien_cultural,Material,Periodo_historico,Cronologia,Fijacion_cultural,Fotografia,Descripcion_fotografia,Procedencia_del_bien_cultural,Nombre_del_sitio,Investigador_responsable_procedencia,Unidad_Cateo,Nivel,Profundidad,Nombre_del_Proyecto,Codigo_de_control_de_investigacion,Descripcion_del_contexto_arqueologico,Regimen_custodia,codigo_anterior_info_relacionada,Fichas_relacionadas,Otros_Codigos,Observaciones,Bibliografa) VALUES(:cod_objeto,:Inventariado_por,:Numero_registro,:Bien_cultural,:Material,:Periodo_historico,:Cronologia,:Fijacion_cultural,:Fotografia,:Descripcion_fotografia,:Procedencia_del_bien_cultural,:Nombre_del_sitio,:Investigador_responsable_procedencia,:Unidad_Cateo,:Nivel,:Profundidad,:Nombre_del_Proyecto,:Codigo_de_control_de_investigacion,:Descripcion_del_contexto_arqueologico,:Regimen_custodia,:codigo_anterior_info_relacionada,:Fichas_relacionadas,:Otros_Codigos,:Observaciones,:Bibliografa)");
  //Asignamos los valores que vienen del Metodo POST(Los que vienen del formulario)
  $sentencia->bindParam(":cod_objeto",$cod_objeto);
  $sentencia->bindParam(":Inventariado_por",$Inventariado_por);
  $sentencia->bindParam(":Numero_registro",$Numero_registro);
  $sentencia->bindParam(":Bien_cultural",$Bien_cultural);
  $sentencia->bindParam(":Material",$Material);
  $sentencia->bindParam(":Periodo_historico",$Periodo_historico);
  $sentencia->bindParam(":Cronologia",$Cronologia);
  $sentencia->bindParam(":Fijacion_cultural",$Fijacion_cultural);
  $sentencia->bindParam(":Fotografia",$Fotografia);
  $sentencia->bindParam(":Descripcion_fotografia",$Descripcion_fotografia);
  $sentencia->bindParam(":Procedencia_del_bien_cultural",$Procedencia_del_bien_cultural);
  $sentencia->bindParam(":Nombre_del_sitio",$Nombre_del_sitio);
  $sentencia->bindParam(":Investigador_responsable_procedencia",$Investigador_responsable_procedencia);
  $sentencia->bindParam(":Unidad_Cateo",$Unidad_Cateo);
  $sentencia->bindParam(":Nivel",$Nivel);
  $sentencia->bindParam(":Profundidad",$Profundidad);
  $sentencia->bindParam(":Nombre_del_Proyecto",$Nombre_del_Proyecto);
  $sentencia->bindParam(":Codigo_de_control_de_investigacion",$Codigo_de_control_de_investigacion);
  $sentencia->bindParam(":Descripcion_del_contexto_arqueologico",$Descripcion_del_contexto_arqueologico);
  $sentencia->bindParam(":Regimen_custodia",$Regimen_custodia);
  $sentencia->bindParam(":codigo_anterior_info_relacionada",$codigo_anterior_info_relacionada);
  $sentencia->bindParam(":Fichas_relacionadas",$Fichas_relacionadas);
  $sentencia->bindParam(":Otros_Codigos",$Otros_Codigos);
  $sentencia->bindParam(":Observaciones",$Observaciones);
  $sentencia->bindParam(":Bibliografa",$Bibliografa);

  //Ejecutamos la sentencia SQL
  $sentencia->execute();

}


/*print_r($listaobjeto);*/
?>



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
      <label for="Inventariado_por" class="form-label">Inventariado por</label>
      <input type="text"
        class="form-control" name="Inventariado_por" id="Inventariado_por" aria-describedby="helpId" placeholder="Inventariado por">
    </div>

    <div class="mb-3">
      <label for="Numero_registro" class="form-label">Número de registro</label>
      <input type="text"
        class="form-control" name="Numero_registro" id="Numero_registro" aria-describedby="helpId" placeholder="Número de registro">
    </form>

    <div class="mb-3">
      <label for="Bien_Cultural" class="form-label">Bien Cultural</label>
      <input type="text"
        class="form-control" name="Bien_Cultural" id="Bien_Cultural" aria-describedby="helpId" placeholder="Bien Cultural">
    </form>

    <div class="mb-3">
      <label for="Material" class="form-label">Material</label>
      <input type="text"
        class="form-control" name="Material" id="Material" aria-describedby="helpId" placeholder="Material">
    </form>
    
    <div class="mb-3">
      <label for="Periodo_historico" class="form-label">Periodo Historico</label>
      <input type="text"
        class="form-control" name="Periodo_historico" id="Periodo_historico" aria-describedby="helpId" placeholder="Periodo Historico">
    </form>

    <div class="mb-3">
      <label for="Cronologia" class="form-label">Cronologia</label>
      <input type="text"
        class="form-control" name="Cronologia" id="Cronologia" aria-describedby="helpId" placeholder="Cronologia">
    </form>

    <div class="mb-3">
      <label for="Fijacion_Cultural" class="form-label">Fijacion Cultural</label>
      <input type="text"
        class="form-control" name="Fijacion_Cultural" id="Fijacion_Cultural" aria-describedby="helpId" placeholder="Fijacion Cultural">
    </form>

    <div class="mb-3">
      <label for="Fotografia" class="form-label">Fotografia</label>
      <input type="file"
        class="form-control" name="Fotografia" id="Fotografia" aria-describedby="helpId" placeholder="Fotografia">
    </form>

    <div class="mb-3">
      <label for="Descripcion_fotografia" class="form-label">Descripcion Fotografia</label>
      <input type="text"
        class="form-control" name="Descripcion_fotografia" id="Descripcion_fotografia" aria-describedby="helpId" placeholder="Descripcion Fotografia">
    </form>

    <div class="mb-3">
      <label for="Procedencia_del_bien_cultural" class="form-label">Procedencia del bien cultural</label>
      <input type="text"
        class="form-control" name="Procedencia_del_bien_cultural" id="Procedencia_del_bien_cultural" aria-describedby="helpId" placeholder="Procedencia del bien cultural">
    </form>
    
    <div class="mb-3">
      <label for="Nombre_del_sitio" class="form-label">Nombre del sitio</label>
      <input type="text"
        class="form-control" name="Nombre_del_sitio" id="Nombre_del_sitio" aria-describedby="helpId" placeholder="Nombre del sitio">
    </form>


    <div class="mb-3">
      <label for="Investigador_responsable_procedencia" class="form-label">Investigador responsable procedencia</label>
      <input type="text"
        class="form-control" name="Investigador_responsable_procedencia" id="Investigador_responsable_procedencia" aria-describedby="helpId" placeholder="Investigador responsable procedencia">
    </form>

    <div class="mb-3">
      <label for="Unidad_Cateo" class="form-label">Unidad de Cateo</label>
      <input type="text"
        class="form-control" name="Unidad_Cateo" id="Unidad_Cateo" aria-describedby="helpId" placeholder="Unidad de Cateo">
    </form>

    <div class="mb-3">
      <label for="Nivel" class="form-label">Nivel</label>
      <input type="text"
        class="form-control" name="Nivel" id="Nivel" aria-describedby="helpId" placeholder="Nivel">
    </form>  

    <div class="mb-3">
      <label for="Profundidad" class="form-label">Profundidad</label>
      <input type="text"
        class="form-control" name="Profundidad" id="Profundidad" aria-describedby="helpId" placeholder="Profundidad">
    </form>  

    <div class="mb-3">
      <label for="Nombre_del_Proyecto" class="form-label">Nombre del Proyecto</label>
      <input type="text"
        class="form-control" name="Nombre_del_Proyecto" id="Nombre_del_Proyecto" aria-describedby="helpId" placeholder="Nombre del Proyecto">
    </div>

    <div class="mb-3">
      <label for="Codigo_de_control_de_investigacion" class="form-label">	Codigo de control de investigacion</label>
      <input type="text"
        class="form-control" name="Codigo_de_control_de_investigacion" id="Codigo_de_control_de_investigacion" aria-describedby="helpId" placeholder="Codigo anterior info relacionada">
    </div>

    <div class="mb-3">
      <label for="Descripcion_del_contexto_arqueologico" class="form-label">Descripcion del contexto arqueologico</label>
      <input type="text"
        class="form-control" name="Descripcion_del_contexto_arqueologico" id="Descripcion_del_contexto_arqueologico" aria-describedby="helpId" placeholder="Codigo de control de investigación">
    </div>

    <div class="mb-3">
      <label for="Regimen_custodia" class="form-label">Regimen de custodia</label>
      <input type="text"
        class="form-control" name="Regimen_custodia" id="Regimen_custodia" aria-describedby="helpId" placeholder="Regimen de custodia">
    </div>
    
    <div class="mb-3">
      <label for="codigo_anterior_info_relacionada" class="form-label">Codigo anterior info relacionada</label>
      <input type="text"
        class="form-control" name="codigo_anterior_info_relacionada" id="codigo_anterior_info_relacionada" aria-describedby="helpId" placeholder="Codigo de control de investigación">
    </div>
    

    <div class="mb-3">
      <label for="Fichas_relacionadas" class="form-label">Fichas relacionadas</label>
      <input type="text"
        class="form-control" name="Fichas_relacionadas" id="Fichas_relacionadas" aria-describedby="helpId" placeholder="Fichas relacionadas">
    </div>

    <div class="mb-3">
      <label for="Otros_Codigos" class="form-label">Otros codigos</label>
      <input type="text"
        class="form-control" name="Otros_Codigos" id="Otros_Codigos" aria-describedby="helpId" placeholder="Otros codigos">
    </div>

    <div class="mb-3">
      <label for="Observaciones" class="form-label">Observaciones</label>
      <input type="text"
        class="form-control" name="Observaciones" id="Observaciones" aria-describedby="helpId" placeholder="Observaciones">
    </div>


    <div class="mb-3">
      <label for="Bibliografa" class="form-label">Bibliografia</label>
      <input type="text"
        class="form-control" name="Bibliografa" id="Bibliografa" aria-describedby="helpId" placeholder="Bibliografia">
    </div>
    </form>

    <button type="submit" class="btn btn-success">Agregar Objeto</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    <div class="card-footer text-muted">
    </div>
</div>


<?php include("../../templates/footer.php"); ?>