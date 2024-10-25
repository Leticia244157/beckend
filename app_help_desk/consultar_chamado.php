<?php
  session_start();
  // echo $_SESSION['autenticado'];
  if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header ('Location: index.php?login=erro2');
  }

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Via Uni</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="viauni.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Via Uni
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Sobre os salões
            </div>
           
            <div class="card-body">
             
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Salão Principal</h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                    Preços <br>
                    Segunda a Quinta R$8700.00<br>
                    Sexta a Domingo e Freriados R$10300.00 <br>
                  </h6>
                  

                </div>
              </div>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Salão Infantil</h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                    Preços <br>
                    Segunda a Quinta R$3500.00 <br>
                    Sexta a Domingo e Freriados R$5200.00 <br></h6>
                  
                </div>
              </div>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Salão Infantil e Parque</h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                  Preços <br>
                    Segunda a Quinta R$6100.00 <br>
                    Sexta a Domingo e Freriados R$7000.00<br>
                  </h6>
                  

                </div>
              </div>

              <div class="row mt-5">
                      <div class="col-6">
                      <a class="btn btn-lg btn-warning btn-block" href="painel.php">Voltar</a>
                      </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>