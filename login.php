<?php 

    session_start();

    if(isset($_SESSION['sesion'])){
        header("location: usertables.php");
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    INICIAR SESION
  </title>
  <?php 
    include_once "secciones/css.php";
  ?>
</head>
<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">INICIO</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-12">
        <div class="card col-md-2">
            <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                <li class="nav-item text-center"> <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">INGRESAR</a> </li>
                <li class="nav-item text-center"> <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">REGISTRO</a> </li>
           <!-- <li class="nav-item text-center"> <a class="nav-link btr" id="pills-a1-tab" data-toggle="pill" href="#pills-a1" role="tab" aria-controls="pills-a1" aria-selected="false">ADMINISTRADOR</a> </li> -->
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="form px-4 pt-5"> 
                      <form action="php/ingresar_be.php" method="POST">
                        <input type="text" name="nombre" class="form-control" placeholder="NOMBRE DE USUARIO" required="required"> 
                        <input type="password" name="contrasena" class="form-control" placeholder="CONTRASEÑA" required="required"> 
                        <button type="submit" class="btn btn-dark btn-block">INICIAR SECCION</button> 
                      </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="form"> 
                     <form action="php/registro_usuario_be.php" method="POST">
                        <input type="text" name="nombre" class="form-control" placeholder="NOMBRE DE USUARIO" required="required"> 
                        <select name="delegacion" class="form-select" aria-label="Default select example" required="required">
                          <option disabled selected > DELEGACION</option>
                          <option>TUXTLA GUTIERREZ</option>
                          <option>CINTALAPA</option>
                          <option>COPAINALA</option>
                          <option>CHIAPA DE CORZO</option>
                          <option>V.CARRANZA</option>
                          <option>SAN CRISTOBAL</option>
                          <option>COMITAN</option>
                          <option>VILLAFLORES</option>
                          <option>BOCHIL</option>
                          <option>PICHICALCO</option>
                          <option>CATAZAJA</option>
                          <option>OCOSINGO</option>
                          <option>SALTO DE AGUA</option>
                          <option>YAJALON</option>
                          <option>MOTOZINTLA</option>
                          <option>ACAÉTAHUA</option>
                          <option>HUIXTLA</option>
                          <option>TAPACHULA</option>
                          <option>TONALA</option>
                        </select> 
                        <input type="password" name="contrasena" class="form-control" placeholder="CONTRASEÑA" required="required"> 
                        <input type="password" name="rcontrasena" class="form-control" placeholder="REPITA SU CONTRASEÑA" required="required"> 
                        <label for="">CARGO
                        <label><input type="radio" name="cargo" value='1' required> ADMINISTRADOR</label>
                        <label><input type="radio" name="cargo" value='2'> USUARIO</label>
                        <button type="submit" class="btn btn-dark btn-block">REGISTRARSE</button> 
                        </label>
                     </form>
                    </div>
                </div>
            <!--<div class="tab-pane fade" id="pills-a1" role="tabpanel" aria-labelledby="pills-a1-tab">
                    <div class="form px-4"> 
                        <input type="text" name="" class="form-control" placeholder="Name" required="required"> 
                        <input type="password" name="" class="form-control" placeholder="Password" required="required"> 
                        <button class="btn btn-dark btn-block">INGRESAR</button> 
                    </div>
                </div> -->
            </div>
        </div>
    </div>
  <?php 
    include_once "secciones/scripts.php";
  ?>
</body>

</html>