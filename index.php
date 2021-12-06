<?php 

  session_start();

  if(!isset($_SESSION['sesion'])){

    echo'
        <script>
          alert("DEBES INICIAR SESION");
          window.location = "login.php";
        </script>
    ';
    session_destroy();
    die(); 
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
    REPORTE DE SERVICIOS
  </title>
  <?php 
    include_once "secciones/css.php";
  ?>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
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
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-copy-04 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">TRAMITES TOTALES</p>
                      <p class="card-title">11,963<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">PERCEPCIONES TOTALES</p>
                      <p class="card-title">$9,790,260.00<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-book-bookmark text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">INSCRIPCIONES</p>
                      <p class="card-title">5,831<p>
                      <p class="card-title">$5,987,440.00<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-copy-04 text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">MERCANTILES</p>
                      <p class="card-title">197<p>
                      <p class="card-title">$225,230.00<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-paper text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">CERTIFICADOS</p>
                      <p class="card-title">5935<p>
                      <p class="card-title">$3,577,590.00<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-primary"> REPORTE REGIONAL</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="h5 thead-dark">
                      <th class="text-center text-info">
                        REGION
                      </th>
                      <th class=" text-warning" >
                        INSCRIPCIONES
                      </th>
                      <th class=" text-warning" >
                        PERCEPCION
                      </th>
                      <th class=" text-danger">
                        MERCANTILES
                      </th>
                      <th class=" text-danger">
                        PERCEPCION
                      </th>
                      <th class=" text-success" >
                        CERTIFICADOS
                      </th>
                      <th class=" text-success" >
                        PERCEPCION
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="h6 text-center">
                          REGION I, METROPOLITANA<br>TUXTLA GUTIERRES, CHIAPA DE CORZO
                        </td>
                        <td class="numbers bg-warning">
                          1971         
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION II, VALLES ZOQUE<br>TUXTLA GUTIERRES, CHIAPA DE CORZO
                        </td>
                        <td class="numbers bg-warning">
                          106
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          3
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          119
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION III, MEZCAPALA<br>COPAINALA
                        </td>
                        <td class="numbers bg-warning">
                          76
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          0
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          65
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION IV, DE LOS LLANOS<br>VENUSTIANO CARRANZA
                        </td>
                        <td class="numbers bg-warning">
                          69
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          1
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          134
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION V, ALTOS TSOTSIL-TSELTAL<br>SAN CRISTOBAL
                        </td>
                        <td class="numbers bg-warning">
                          255
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          5
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          209
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION VI, FRAILESCA<br>VILLAFLORES
                        </td>
                        <td class="numbers bg-warning">
                          124
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          9
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          225
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION VII, DE LOS BOSQUES<br>BOCHIL
                        </td>
                        <td class="numbers bg-warning">
                          16
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          1
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          9
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION VIII, NORTE <br>PICHUCALCO
                        </td>
                        <td class="numbers bg-warning">
                          274
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          3
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          332
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION IX, COSTA<br>TONALA
                        </td>
                        <td class="numbers bg-warning">
                          441
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          0
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          327
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION X, SOCONUSCO<br>TAPACHULA, ACAPETAHUA, HUIXTLA
                        </td>
                        <td class="numbers bg-warning">
                          1251
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          50
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          1279
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION XI, SIERRA MARISCAL<br>MOTOZINTLA
                        </td>
                        <td class="numbers bg-warning">
                          56
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          3
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          43
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION XII, SELVA LACANDONA<br>OCOSINGO
                        </td>
                        <td class="numbers bg-warning">
                          222
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          0
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          141
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION XIII, MAYA<br>CATAZAJA
                        </td>
                        <td class="numbers bg-warning">
                          241
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          4
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          212
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION XIV, TULIJA TSELTAL CHOL <br>YAJALON, SALTO DE AGUA
                        </td>
                        <td class="numbers bg-warning">
                          71
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          9
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          58
                        </td>
                      </tr>
                      <tr>
                        <td class="h6 text-center">
                          REGION XV, MESETA COMITECA TOJOLAB <br>COMITAN
                        </td>
                        <td class="numbers bg-warning">
                          658
                        </td>
                        <td class="numbers bg-warning">
                          $1,944,620.00         
                        </td>
                        <td class="numbers bg-danger">
                          0
                        </td>
                        <td class="numbers bg-danger">
                          109
                        </td>
                        <td class="numbers bg-success">
                          1978
                        </td>
                        <td class="numbers bg-success">
                          804
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Users Behavior</h5>
                <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
                <canvas id=chartHours width="400" height="100"></canvas>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Email Statistics</h5>
                <p class="card-category">Last Campaign Performance</p>
              </div>
              <div class="card-body ">
                <canvas id="chartEmail"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-primary"></i> Opened
                  <i class="fa fa-circle text-warning"></i> Read
                  <i class="fa fa-circle text-danger"></i> Deleted
                  <i class="fa fa-circle text-gray"></i> Unopened
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> Number of emails sent
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">NASDAQ: AAPL</h5>
                <p class="card-category">Line Chart with Points</p>
              </div>
              <div class="card-body">
                <canvas id="speedChart" width="400" height="100"></canvas>
              </div>
              <div class="card-footer">
                <div class="chart-legend">
                  <i class="fa fa-circle text-info"></i> Tesla Model S
                  <i class="fa fa-circle text-warning"></i> BMW 5 Series
                </div>
                <hr />
                <div class="card-stats">
                  <i class="fa fa-check"></i> Data information certified
                </div>
              </div>
            </div>
          </div>
        </div>
        -->
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
