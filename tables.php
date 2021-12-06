
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ADMINISTRADOR
  </title>
  <?php 
    include_once "secciones/css.php";
  ?>
</head>

<body class="">
  <div class="wrapper ">
  <?php 
    include_once "secciones/menu.php";
  ?>
    <div class="main-panel">
    <?php 
      include_once "secciones/head.php";
    ?>
      <div class="content">
        <div class="row">
          <div class="col-md-8" id="d1">
            <div class="card text-center">
              <div class="card-header">
                <h3 class="card-title text-center">PERIODO</h3>
                <h4 class="card-title text-center">SELECCIONE UNA PERIODO</h4>
              </div>
              <div class="card-body">
                <select name="year">
                    <option value="0" selected>AÑO</option>
                    <?php $year = date("Y");
                          for ($i=2000; $i<=$year; $i++){
                              echo '<option value="'.$i.'">'.$i.'</option>';
                          }
                    ?>
                 </select>
                 <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                      <option selected>MES</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                 </select>  
                 <select class="form-select form-select-lg">
                      <option selected>SEMANA</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                 </select>   
                 <div class="card-header">
                     <div class="text-center">FINALIZADO</div>     
                 </div>
                 <div class="card-header">
                     <div class="text-center">EN PROCESO</div> 
                 </div>        
              </div>
            </div>
          </div>
          <div class="row" id="d1">
           <div class="col-sm-2">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-center">SELECCIONE UNA DELEGACION</h4>
              </div>
              <div class="card-body text-center">
                <div class="col-md-2 selec">
                  <select class="form-select form-select-lg mb-12">
                    <option selected>DELEGACION</option>
                    <option value="20">TOTAL</option>
                    <option value="1">TUXTLA GUTIERREZ</option>
                    <option value="2">CINTALAPA</option>
                    <option value="3">COPAINALA</option>
                    <option value="4">CHIAPA DE CORZO</option>
                    <option value="5">V.CARRANZA</option>
                    <option value="6">SAN CRISTOBAL</option>
                    <option value="7">COMITAN</option>
                    <option value="8">VILLAFLORES</option>
                    <option value="9">BOCHIL</option>
                    <option value="10">PICHICALCO</option>
                    <option value="11">CATAZAJA</option>
                    <option value="12">OCOSINGO</option>
                    <option value="13">SALTO DE AGUA</option>
                    <option value="14">YAJALON</option>
                    <option value="15">MOTOZINTLA</option>
                    <option value="16">ACAPETAHUA</option>
                    <option value="17">HUIXTLA</option>
                    <option value="18">TONALA</option>
                    <option value="19">TAPACHULA</option>
                  </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-center">SELECCIONE UNA SECCION</h4>
              </div>
              <div class="card-body text-center">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li><button class="btn btn-primary btn-lg" type="button" id="pills-S1-tab" data-toggle="pill" href="#pills-s1" role="tab" aria-controls="pills-s1" aria-selected="true">SECCION PRIMERA</button> </li>
                    <li><button class="btn btn-primary btn-lg" type="button" id="pills-S2-tab" data-toggle="pill" href="#pills-s2" role="tab" aria-controls="pills-s2" aria-selected="false">SECCION SEGUNDA</button> </li>
                    <li><button class="btn btn-primary btn-lg" type="button" id="pills-s3-tab" data-toggle="pill" href="#pills-s3" role="tab" aria-controls="pills-s3" aria-selected="false">SECCION TERCERA</button> </li>
                    <li><button class="btn btn-primary btn-lg" type="button" id="pills-s4-tab" data-toggle="pill" href="#pills-s4" role="tab" aria-controls="pills-s4" aria-selected="false">SECCION CUARTA</button> </li>
                    <li><button class="btn btn-primary btn-lg" type="button" id="pills-s5-tab" data-toggle="pill" href="#pills-s5" role="tab" aria-controls="pills-s5" aria-selected="false">SECCION QUINTA</button> </li>
                    <li><button class="btn btn-primary btn-lg" type="button" id="pills-c6-tab" data-toggle="pill" href="#pills-c6" role="tab" aria-controls="pills-c6" aria-selected="false">CERTIFICACIONES</button> </li>
                </ul>              
              </div>
            </div>
            </div>
          </div>
          <div class="tab-content col-md-8" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-s1" role="tabpanel" aria-labelledby="pills-s1-tab">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> SECCION PRIMERA</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class=" thead-dark">
                    <th>
                      SERVICIOS OTORGADOS
                    </th>
                    <th>
                      TRAMITES
                    </th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>COMPRAVENTA</td> 
                        <td><input name="" type="number"></td>
                    </tr>
                    <tr>
                        <td>DONACION</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>TRANSMISION DE PROPIEDAD</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>TRANSMISION DE PROP. EN EJECUSION DE FIDEICOMISO</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>        
                        <td>TITULO DE PROPIEDAD</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>PERMUTA </td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>OTORGAMIENTO DE ESCRITURA EN REBELDIA</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>TITULO DE PROPIEDAD (REGISTRO AGRARIO NACIONAL)</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>DACION EN PAGO</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CONSTITUCION SERVIDUMBRE DE PASO</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CONSTITUCION DE USUFRUCTO VITALICIO</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CANCELACION DE SERVIDUMBRE</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CANCELACION DE USUFRUCTO</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CANCELACION DE LA RESERVA DE DOMINIO</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CONSOLIDACION DE PROPIEDAD</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>INSCRIPCION PATRIMONIO FAMILIAR</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CANCELACION DE PATRIMONIO FAMILIAR</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CAPITULACIONES MATRIMONIALES</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>ACTOS Y CONTRATOS</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CONV. O RESOLUCIONES JUDICIALES O ADMINISTRATIVAS</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>LOTIFICACION</td> 
                        <td><input type="number"></td>  
                    </tr>
                    <tr>    
                        <td>RELOTIFICACION </td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>DIVISION DE COOP.</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>SUBDIVISION</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>FUSION</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>CONST. DE REG. DE PROP. EN CONDOMINIO</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>SEGUNDO AVISO DE PREVENTIVO</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>INSCRIPCION DE ANOTACION MARGINAL</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>CANCELACION DE ANOTACION MARGINAL</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>ALCANCE</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>CORRECCION O CANCELACION DE PRIMER O SEGUNDO AVISO PREVENTIVO</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>RESERVA DE USUFRUCTO VITALICIO</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>CESION DE DERECHOS INMOBILIARIOS</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <th>TOTAL</td> 
                        <td>Aqui va la suma de los imputs</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-s2" role="tabpanel" aria-labelledby="pills-s2-tab">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> SECCION SEGUNDA</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="thead-dark">
                     <tr>
                        <th>SERVICIOS OTORGADOS</th>
                        <th>TRAMITES</th>
                     </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>APERTURA DE CREDITO (INTERES SOCIAL)</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>   
                        <td>APERTURA DE CREDITO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>INSCRIPCION DE HIPOTECA</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CREDITO PRODUCCION AGRICOLA U OTROS DISTINTOS A LA ADQUISICION DE VIVIENDA</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>OTROS DISTINTOS A LA ADQUISICION DE VIVIENDA</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CONVENIO MODIFICATORIO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CREDITO DE MUTUO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>REFRENDO O CANCELACION APERTURA CREDITO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>REFRENDO O CANCELACION DE HIPOTECA</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>REFRENDO O CANCELACION CONVENIO MODIFICATORIO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>REFRENDO O CANCELACION MUTUO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>INSCRIPCION DE FIDEICOMISO (SOBRE INMUEBLES)</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>MODIFICACION DE FIDEICOMISO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CANCELACION DE FIDEICOMISO Y MODIFICACION DE FIDEICOMISO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>EMBARGOS</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>EMBARGO (JUICIO ALIMENTOS)</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>INSCRIPCION DE CEDULA HIPOTECARIA</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CANCELACION DE CEDULA HIPOTECARIA</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>REFERENDO O CANCELACION DE EMBARGO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>FIANZA</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CANCELACION DE FIANZA</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CANCELACION DE INSCRIPCION</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>FIDEICOMISO (NO INCLUYAN INMUEBLES)</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CESION ONEROSA DE CREDITO Y DERECHOS LITIGIOSOS</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CANCELACION DE CESION ONEROSA DE CREDITO Y DERECHOS LITIGIOSOS</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>RECONOCIMIENTO DE ADEUDO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CANCELACION DE RECONOCIMIENTO DE ADEUDO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>DIVISION DE HIPOTECA (POR LOTIFICACION, SUBDIVICION O FRACCION)</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CANCELACION DE DIVISION DE HIPOTECA</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>PODER GENERAL (AUTOTRANSPORTE)</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>REGISTRO DE SELLOS Y FIRMA DE NOTARIOS</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>CONVENIOS DENTRO DE FIDEICOMISOS</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>PATENTE CORREDOR PUBLICO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>AUTORIZACION SELLO Y FIRMA CORREDOR PUBLICO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>FIENZA CORREDOR PUBLICO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>PODER PERSONAS FISICAS</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>PODER PERSONA MORAL</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>REVOCACION O RENUNCIA DE PODERE</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>INSCRIPCION O CANCELACION SUPLENCIA NOTARIAL</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>ARRENDAMIENTO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>COMODATO</td>
                        <td><input type="number"></td>
                    </tr>    
                    <tr>    
                        <td>INSCRIPCION O CANCELACION PATENTE DE NOTARIO</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <th>TOTAL</td> 
                        <td>Aqui va la suma de los imputs</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-s3" role="tabpanel" aria-labelledby="pills-s3-tab">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> SECCION TERCERA</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="thead-dark">                    
                        <th>SERVICIOS OTORGADOS</th>
                        <th>TRAMITES</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>SOCIEDAD CIVIL</td> 
                        <td><input name="" type="number"></td>
                    </tr>
                    <tr>
                        <td>PROTOCOLIZACION DE ACTAS DE ASAMBLEA</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>INSCRIPCION ASOCIACIONES CIVILES</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>MODIFICACION ESTATUS ASOCIACION CIVIL</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>        
                        <td>INSCRIPCION DE QUIEBRAS Y SENTENCIAS</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>FUSION DE SOCIEDADES CIVILES</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>FUSION ASOCIACION CIVIL</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                    <th>TOTAL</td> 
                    <td>Aqui va la suma de los imputs</td>
                    </tr> 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-s4" role="tabpanel" aria-labelledby="pills-s4-tab">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> SECCION CUARTA</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="thead-dark">                    
                        <th>SERVICIOS OTORGADOS</th>
                        <th>TRAMITES</th>
                    </thead>
                    <tbody>
                    <tr>
                      <td>ADJUDICACION LABORAL</td> 
                      <td><input name="" type="number"></td>
                    </tr>
                    <tr>
                        <td>ADJUDICACION POR HERENCIA</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>ADJUDICACION POR REMATE JUDICIAL</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>PRESCRIPCION POSITIVA O ADJUDICATIVA</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>        
                        <td>INFORMACION AD-PERPETUAM</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>OTORGAMIENTO DE ESCRITURA EN REBELDIA</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>USUCAPION O PRESCRIPCION POSITIVA</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>RESOLUCIONES JUDICIALES</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>AUTO DECLARATORIO DE HEREDEROS</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>RADICACION</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>SUCESION TESTAMENTARIA O INTESTAMENTARIA</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>SENTENCIAS</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>INSCRIPCION DE TESTAMENTO</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>BUSQUEDA DE TESTAMENTO</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>DEPOSITO DE TESTAMENTO</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <th>TOTAL</td> 
                        <td>Aqui va la suma de los imputs</td>
                    <tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-s5" role="tabpanel" aria-labelledby="pills-s5-tab">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> SECCION QUINTA</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="thead-dark">                    
                        <th>SERVICIOS OTORGADOS</th>
                        <th>TRAMITES</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>INSCRIPCION DE SOCIEDADES MERCANTILES</td> 
                        <td><input name="" type="number"></td>
                    </tr>
                    <tr>
                        <td>PROTOCOLIZACION ACTAS DE ASAMBLEA MERCANTILES</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>PODER PERSONAS FISICAS</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>PODER PERSONA MORAL</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>        
                        <td>REVOCACION O RENUNCIA DE PODERES</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CORRESPONSALIA MERCANTIL</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>SOCIEDADES COOPERATIVAS</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>SOCIEDADES DE SOLIDARIDAD SOCIAL</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>SOCIEDADES RURALES</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>SOCIEDADES MERCANTILES</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>ACTAS DE ASAMBLEA</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>ASOCIACIONES RELIGIOSAS</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CAMARA DE LA INDUSTRIA</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <th>TOTAL</td> 
                        <td>Aqui va la suma de los imputs</td>
                    <tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-c6" role="tabpanel" aria-labelledby="pills-c6-tab">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> CERTIFICACIONES</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="thead-dark">                    
                        <th>SERVICIOS OTORGADOS</th>
                        <th>TRAMITES</th>
                    </thead>
                    <tbody>
                    <tr>
                       <td>PRIMER AVISO PREVENTIVO</td> 
                       <td><input name="" type="number"></td>
                    </tr>
                    <tr>
                        <td>CORRECCION O CANCELACION PRIMER AVISO PREVENTIVO</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CERTIFICADO DE LIBERTAD O GRAVAMEN</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>COPIA CERTIFICADA</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>        
                        <td>HOJA ADICIONAL</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>COPIA SIMPLE</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <td>CONSTANCIA DE NO PROPIEDAD REGISTRADA</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CONSTANCIA DE NO INSCRIPCION</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>INFOR. A DEP. DE GOB.</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CONSTANCIA REVOCACION DE PODERES</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>CONSTANCIA DE DATOS REGISTRALES</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>HISTORIA TRASLATIVA DE DOMINIO</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>VERIFICACION</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>RATIFICACION DE FIRMAS</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>BUSQUEDA</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td style="background-color:yellow;">OTROS SERVICIOS</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td style="background-color:yellow;">DIFERENCIAS</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td>OTROS ACTOS INSCRIBIBLES</td> 
                        <td><input type="number"></td>
                    </tr>
                    <tr>    
                        <th>TOTAL</td> 
                        <td>Aqui va la suma de los imputs</td>
                    <tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <?php 
        include_once "secciones/foot.php";
      ?>
    </div>
  </div>
  <?php 
    include_once "secciones/scripts.php";
  ?>
</body>

</html>